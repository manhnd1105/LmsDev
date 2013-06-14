<?php
/* Copyright (c) 1998-2010 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once './Services/Exceptions/classes/class.ilException.php';
/**
* membership registration exception
*
* @author Stefan Meyer <meyer@leifos.com>
*
* @version $Id$
*
* @ingroup ServicesMembership
*/
class ilMembershipRegistrationException extends ilException
{
	/**
	 * Constructor
	 */
	public function __construct($a_message, $a_code = 0)
	{
		parent::__construct($a_message,$a_code);
	}
}
?>