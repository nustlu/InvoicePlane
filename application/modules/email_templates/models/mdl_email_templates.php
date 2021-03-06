<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * InvoicePlane
 * 
 * A free and open source web based invoicing system
 *
 * @package		InvoicePlane
 * @author		Kovah (www.kovah.de)
 * @copyright	Copyright (c) 2012 - 2014 InvoicePlane.com
 * @license		https://invoiceplane.com/license.txt
 * @link		https://invoiceplane.com
 * 
 */

class Mdl_Email_Templates extends Response_Model {
	
	public $table = 'ip_email_templates';
	public $primary_key = 'ip_email_templates.email_template_id';
    
    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS *', FALSE);
    }
	
	public function default_order_by()
	{
		$this->db->order_by('email_template_title');
	}
	
	public function validation_rules()
	{
		return array(
			'email_template_title' => array(
				'field' => 'email_template_title',
				'label' => lang('title'),
				'rules' => 'required'
			),
			'email_template_body' => array(
				'field' => 'email_template_body',
				'label' => lang('body')
			)
		);
	}
}

?>