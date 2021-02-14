<?php

    function the_excerpt_max_charlength($charlength) {
        echo cutText(get_the_excerpt(), $charlength);
    }


    function cutText($text, $maxLength){
        
        $maxLength++;

        $return = '';
        if (mb_strlen($text) > $maxLength) {
            $subex = mb_substr($text, 0, $maxLength - 5);
            $exwords = explode(' ', $subex);
            $excut = - ( mb_strlen($exwords[count($exwords) - 1]) );
            if ($excut < 0) {
                $return = mb_substr($subex, 0, $excut);
            } else {
                $return = $subex;
            }
            $return .= '[...]';
        } else {
            $return = $text;
        }
        
        return $return;
    }

   
    function getQueryParams(){
        global $query_string;
        $parts = explode('&', $query_string);       
        $return = array();
        foreach($parts as $part){
            $tmp = explode('=', $part);
            $return[$tmp[0]] = trim(urldecode($tmp[1]));
        }
        
        return $return;
    }  

    function getQuerySingleParam($name){
        $qparams = getQueryParams();
        
        if(isset($qparams[$name])){
            return $qparams[$name];
        }
        
        return NULL;
    }


    function getCurrentPageUrl(){
        $pageURL = 'http';
        
	if(isset($_SERVER["HTTPS"])){
            if($_SERVER["HTTPS"] == "on") {
                $pageURL .= "s";
            }
	}
        
	$pageURL .= "://";
        
	if($_SERVER["SERVER_PORT"] != "80"){
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	}else{
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
        
	return $pageURL;
    }


    add_filter('posts_where', 'title_like_posts_where', 10, 2);

    function title_like_posts_where( $where, &$wp_query ) {
        global $wpdb;
        
        if ($post_title_like = $wp_query->get('post_title_like')){
            $where .= ' AND '.$wpdb->posts.'.post_title LIKE \'%'.esc_sql(like_escape($post_title_like)).'%\'';
        }
        
        return $where;
    }



?>