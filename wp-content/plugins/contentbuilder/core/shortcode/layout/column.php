<?php
/**
 * @version    $Id$
 * @package    Content Builder
 * @author
 * @copyright  Copyright (C) 2012  . All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.
 * Technical Support:  Feedback - http://www.
 */
/*
 * Define a column shortcode
 */
if ( ! class_exists( 'IG_Column' ) ) {

	class IG_Column extends IG_Pb_Shortcode_Layout {

		public function __construct() {
			parent::__construct();
		}

		/**
		 * DEFINE configuration information of shortcode
		 */
		function element_config() {
			$this->config['shortcode']     = strtolower( __CLASS__ );
			$this->config['extract_param'] = array( 'span', 'css_suffix' );
			// Use Ajax to speed up element settings modal loading speed
			$this->config['edit_using_ajax'] = true;
		}

		/**
		 * contain setting items of this element (use for modal box)
		 *
		 */
		function element_items() {

		}



		/**
		 *
		 * @param type $content			 : inner shortcode elements of this column
		 * @param string $shortcode_data
		 * @return string
		 */
		public function element_in_pgbldr( $content = '', $shortcode_data = '' ) {
			$column_html    = empty($content) ? '' : IG_Pb_Helper_Shortcode::do_shortcode_admin( $content, true );
			$span           = ( ! empty($this->params['span'] ) ) ? $this->params['span'] : 'span12';
			$css_suffix           = ( ! empty($this->params['css_suffix'] ) ) ? $this->params['css_suffix'] : 'col-sm-12';
			$shortcode_data = '[' . $this->config['shortcode'] . ' span="' . $span . '" css_suffix="' . $css_suffix . '"]';
			// Remove empty value attributes of shortcode tag.
			$shortcode_data	= preg_replace( '/\[*([a-z_]*[\n\s\t]*=[\n\s\t]*"")/', '', $shortcode_data );

			$rnd_id   = IG_Pb_Utils_Common::random_string();
			$column[] = '<div class="jsn-column-container clearafter shortcode-container ">
							<div class="jsn-column ' . $span . '">
								<div class="thumbnail clearafter">
									<textarea class="hidden" name="shortcode_content[]" >' . $shortcode_data . '</textarea>
									<div class="jsn-column-content item-container" data-column-class="' . $span . '"  data-column-css="'.$css_suffix.'" >
										<div class="jsn-handle-drag jsn-horizontal jsn-iconbar-trigger"><div class="jsn-iconbar layout">
										<a class="item-delete column" onclick="return false;" title="' . __( 'Delete column', IGPBL ) . '" href="#"><i class="icon-trash"></i></a>
										<a href="javascript:void(0);" title="Edit column" data-custom-action="collumnAction" data-shortcode="' . $this->config['shortcode'] . '" class="element-edit column custm" data-use-ajax="' . ( $this->config['edit_using_ajax'] ? 1 : 0 ) . '"><i class="icon-pencil"></i></a>
										</div></div>
										<div class="jsn-element-container item-container-content">' . $column_html . '</div>
										<a class="jsn-add-more ig-more-element" href="javascript:void(0);"><i class="icon-plus"></i>' . __( 'Add Element', IGPBL ) . '</a>
									</div>
									<textarea class="hidden" name="shortcode_content[]" >[/' . $this->config['shortcode'] . ']</textarea>
								</div>
							</div>
						</div>';
			return $column;
		}

		/**
		 * define shortcode structure of element
		 */
		function element_shortcode( $atts = null, $content = null ) {
			extract( shortcode_atts( array( 'span' => 'span6', 'style' => '' ), $atts ) );
			$style   = empty( $style ) ? '' : "style='$style'";
			$span    = intval( substr( $span, 4 ) );
			$span_sm = intval( $span * 3 / 2 );

			if (BOOTSTRAP_VERSION == 2) $class = "span$span";
			else {
				$class = "col-xs-12 col-md-$span";
				if ($atts['css_suffix'] && $atts['css_suffix']!='') {
					$class = 'col-xs-12 ' . $atts['css_suffix'] . ' col-md-' . $span;
				}
			}
			return '<div class="' . $class . '" >' . IG_Pb_Helper_Shortcode::remove_autop( $content ) . '</div>';
		}

	}

}
