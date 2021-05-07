<?php
/**
 * Filter Action
 *
 *
 *
 * Note: Auto Generated using xsltproc
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @author     Diederik de Groot <ddegroot@gmail.com>
 * @license    http://github.com/chan-sccp/PAMI/LICENSE
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace PAMI\Message\Action;

/**
 * Filter Action
 *
 * Related To:
 * - @see PAMI\Message\Action\FilterListAction
 *
 * Note: Auto Generated using xsltproc
 */
class FilterAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct('Filter');
    }

    /**
     * set Operation
     *
     * @param string $operation
     *
     *
     * @return void
     */
    public function setOperation($operation)
    {
        $this->setKey('Operation', $operation);
    }
    /**
     * set Filter
     *
     * @param string $filter
     *        Filters can be whitelist or blacklist
     *
     * @return void
     */
    public function setFilter($filter)
    {
        $this->setKey('Filter', $filter);
    }
}
