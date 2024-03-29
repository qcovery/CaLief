<?php
/**
 * Row Definition for user
 *
 * PHP version 5
 *
 * Copyright (C) Villanova University 2010.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @category VuFind2
 * @package  Db_Row
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org   Main Site
 */
namespace CaLief\Db\Row;
use VuFind\Db\Row\RowGateway;
use Laminas\Db\Sql\Expression,
    Laminas\Db\Sql\Predicate\Predicate,
    Laminas\Db\Sql\Sql,
    Laminas\Crypt\Symmetric\Mcrypt,
    Laminas\Crypt\Password\Bcrypt,
    Laminas\Crypt\BlockCipher as BlockCipher;

/**
 * Row Definition for user
 *
 * @category VuFind2
 * @package  Db_Row
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org   Main Site
 */
class UserCalief extends RowGateway implements \VuFind\Db\Table\DbTableAwareInterface,
    \ZfcRbac\Identity\IdentityInterface
{
    use \VuFind\Db\Table\DbTableAwareTrait;

    /**
     * Constructor
     *
     * @param \Laminas\Db\Adapter\Adapter $adapter Database adapter
     */
    public function __construct($adapter)
    {
        parent::__construct('id', 'user_calief', $adapter);
    }

    /**
     * Get the list of roles of this identity
     *
     * @return string[]|\Rbac\Role\RoleInterface[]
     */
    public function getRoles()
    {
        return ['loggedin'];
    }
}
