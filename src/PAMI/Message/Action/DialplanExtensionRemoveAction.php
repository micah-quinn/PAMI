<?php
/**
 * DialplanExtensionRemove Action
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
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
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
 * DialplanExtensionRemove Action
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
 * @author     Diederik de Groot <ddegroot@gmail.com>
 * @license    http://dkgroot.github.com/PAMI/ Apache License 2.0
 * @link       http://github.com/dkgroot/PAMI/
 */
class DialplanExtensionRemoveAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $context
     *        Context of the extension being removed
     *
     * @param string $extension
     *        Name of the extension being removed (may include callerid match by separating with '/')
     *
     * @return void
     */
    public function __construct($context, $extension)
    {
        parent::__construct('DialplanExtensionRemove');
        $this->setKey('Context', $context);
        $this->setKey('Extension', $extension);
    }

    /**
     * set Priority
     *
     * @param string $priority
     *        If provided, only remove this priority from the extension instead of all priorities in the extension.
     *
     * @return void
     */
    public function setPriority($priority)
    {
        $this->setKey('Priority', $priority);
    }
}
