 HY<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:585:"SELECT t.element_id, t.language_code, t.source_language_code, t.trid
				    FROM wp_icl_translations t
				JOIN wp_term_taxonomy tax
					ON t.element_id = tax.term_taxonomy_id
						AND t.element_type = CONCAT('tax_', tax.taxonomy)
				    JOIN wp_icl_translations tridt
				      ON tridt.element_type = t.element_type
				      AND tridt.trid = t.trid
				    WHERE  tridt.trid = (SELECT trid FROM wp_icl_translations t
				JOIN wp_term_taxonomy tax
					ON t.element_id = tax.term_taxonomy_id
						AND t.element_type = CONCAT('tax_', tax.taxonomy) WHERE element_id = 214 LIMIT 1)";s:11:"last_result";a:0:{}s:8:"col_info";a:4:{i:0;O:8:"stdClass":13:{s:4:"name";s:10:"element_id";s:7:"orgname";s:10:"element_id";s:5:"table";s:1:"t";s:8:"orgtable";s:19:"wp_icl_translations";s:3:"def";s:0:"";s:2:"db";s:11:"donamadeira";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49160;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:13:"language_code";s:7:"orgname";s:13:"language_code";s:5:"table";s:1:"t";s:8:"orgtable";s:19:"wp_icl_translations";s:3:"def";s:0:"";s:2:"db";s:11:"donamadeira";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:28;s:9:"charsetnr";i:246;s:5:"flags";i:20481;s:4:"type";i:253;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:20:"source_language_code";s:7:"orgname";s:20:"source_language_code";s:5:"table";s:1:"t";s:8:"orgtable";s:19:"wp_icl_translations";s:3:"def";s:0:"";s:2:"db";s:11:"donamadeira";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:28;s:9:"charsetnr";i:246;s:5:"flags";i:0;s:4:"type";i:253;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:4:"trid";s:7:"orgname";s:4:"trid";s:5:"table";s:1:"t";s:8:"orgtable";s:19:"wp_icl_translations";s:3:"def";s:0:"";s:2:"db";s:11:"donamadeira";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:53257;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:0;s:10:"return_val";i:0;}