<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_m extends CI_Model
{
	
	public function get_wp_posts($color){
		$query = "
			SELECT 
				wpp.post_title, 
				wpp.guid, 
				wpp.post_date, 
				REPLACE( 
					REPLACE( 
						REPLACE( 
							REPLACE( wpo.option_value, '%year%', DATE_FORMAT(wpp.post_date,'%Y') ),
							'%monthnum%', 
							DATE_FORMAT(wpp.post_date, '%m') 
						), 
						'%day%', 
						DATE_FORMAT(wpp.post_date, '%d') 
					), 
					'%postname%', wpp.post_name 
				) AS permalink
  			FROM wpvp_posts wpp
  			JOIN wpvp_options wpo
    		ON wpo.option_name = 'permalink_structure'
    		LEFT JOIN wpvp_term_relationships wptr
    		ON wptr.object_id = wpp.id
    		LEFT JOIN wpvp_terms wpt
			ON wpt.term_id = wptr.term_taxonomy_id 
			LEFT JOIN wpvp_term_taxonomy wptt
			ON wptt.term_id = wpt.term_id
			WHERE wpp.post_type = 'post'
				AND wpp.post_status = 'publish'
			    AND wptt.taxonomy = 'category'
			    AND wpt.name = 'Angel Color " . $color . "'
			ORDER BY wpp.post_date DESC;";

 		$result = $this->db->query($query);
		return $result->result_array();
	}

	public function get_wp_posts_angel_number_category(){
		$query = "
			SELECT 
				wpp.post_title, 
				wpp.guid, 
				wpp.post_date, 
				REPLACE( 
					REPLACE( 
						REPLACE( 
							REPLACE( wpo.option_value, '%year%', DATE_FORMAT(wpp.post_date,'%Y') ),
							'%monthnum%', 
							DATE_FORMAT(wpp.post_date, '%m') 
						), 
						'%day%', 
						DATE_FORMAT(wpp.post_date, '%d') 
					), 
					'%postname%', wpp.post_name 
				) AS permalink
  			FROM wpvp_posts wpp
  			JOIN wpvp_options wpo
    		ON wpo.option_name = 'permalink_structure'
    		LEFT JOIN wpvp_term_relationships wptr
    		ON wptr.object_id = wpp.id
    		LEFT JOIN wpvp_terms wpt
			ON wpt.term_id = wptr.term_taxonomy_id 
			LEFT JOIN wpvp_term_taxonomy wptt
			ON wptt.term_id = wpt.term_id
			WHERE wpp.post_type = 'post'
				AND wpp.post_status = 'publish'
			    AND wptt.taxonomy = 'category'
			    AND wpt.name = 'Angel Number'
			ORDER BY wpp.post_date DESC;";

 		$result = $this->db->query($query);
		return $result->result_array();
	}

}

?>