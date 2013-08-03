<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007-2008 Harvey Kane <code@ragepank.com>
 * Copyright 2007-2008 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

$table = 'sponsor';
$o = 1;

$default_td[$table]['td_displayfield']  = 'sp_title';
$default_td[$table]['td_rolloverfield'] = '';
$default_td[$table]['td_orderbyfields'] = 'displayorder';
$default_td[$table]['td_topsubmit']     = 'yes';
$default_td[$table]['td_deleteoption']  = 'yes';
$default_td[$table]['td_menutype']      = 'list';
$default_td[$table]['td_categoryfield'] = '';
$default_td[$table]['td_categorytable'] = '';
$default_td[$table]['td_help']          = '';

/* Event ID */
$field = 'sponsorid';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_type']  = 'readonly';
$default_fd[$table][$field]['fd_help']  = 'A unique ID, automatically assigned by the system';

/* Event Title */
$field = 'sp_title';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'text';
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size']     = '50';
$default_fd[$table][$field]['fd_help']     = 'The sponsor name';


/* URL */
$field = 'sp_link';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'url';
$default_fd[$table][$field]['fd_name']     = 'More info link';
$default_fd[$table][$field]['fd_required'] = 'no';
$default_fd[$table][$field]['fd_size']     = '30';
$default_fd[$table][$field]['fd_help']     = 'Web link';

/* Event Title */
$field = 'sp_linktext';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'text';
$default_fd[$table][$field]['fd_required'] = 'no';
$default_fd[$table][$field]['fd_size']     = '80';
$default_fd[$table][$field]['fd_help']     = 'Text to use for the link title (helps with SEO)';

// Image Field
$default_fd['sponsor']['sp_image'] = array(
        'fd_name' => "Image",
        'fd_type' => "fileupload",
        'fd_help' => "A logo for the sponsor",
        'fd_order' => $o++,
        'fd_mode' => "standard",
        'fd_quickedit' => "yes",
    );

// Group Field
$default_fd['sponsor']['sp_group'] = array(
        'fd_name' => "Group",
        'fd_type' => "radio",
        'fd_options' => "gold\nsilver\nbronze",
        'fd_default' => 'gold',
        'fd_help' => "Grouping for sponsors (if reqd.)",
        'fd_order' => $o++,
    );

