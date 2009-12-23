<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Tom Dale <tom@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */


/* Create sponsors array for sidebar*/
        $sponsors = JOJO::selectQuery("SELECT * FROM {sponsor} ORDER BY displayorder");
        foreach ($sponsors as $i => &$s){
            $s['title'] = htmlspecialchars($s['sp_title'], ENT_COMPAT, 'UTF-8', false);
            $s['linktext'] = htmlspecialchars($s['sp_linktext'], ENT_COMPAT, 'UTF-8', false);
        }
        $smarty->assign('sponsors', $sponsors);

