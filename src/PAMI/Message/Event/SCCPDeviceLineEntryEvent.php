<?php
/**
 * Event triggered by SCCPShowDevice Line Entries.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Diederik de Groot <ddegroot@users.sf.net>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2015 Diederik de Groot <ddegroot@users.sf.net>, Marcelo Gornstein <marcelog@gmail.com>
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
namespace PAMI\Message\Event;

use PAMI\Message\Event\EventMessage;

/**
 * Event triggered by SCCPShowDevice Line Entries.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Diederik de Groot <ddegroot@users.sf.net>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class SCCPDeviceLineEntryEvent extends EventMessage
{
    /**
     * Returns key: 'ChannelType'.
     *
     * @return string
     */
    public function getChannelType()
    {
        return $this->getKey('ChannelType');
    }

    /**
     * Returns key: 'ChannelObjectType'.
     *
     * @return string
     */
    public function getChannelObjectType()
    {
        return $this->getKey('ChannelObjectType');
    }

    /**
     * Returns key: 'Id'.
     *
     * @return integer
     */
    public function getId()
    {
        return intval($this->getKey('Id'));
    }

    /**
     * Returns key: 'Name'.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getKey('Name');
    }

    /**
     * Returns key: 'Suffix'.
     *
     * @deprecated Please use getSubscriptionId() instead
     * @return integer
     */
    public function getSuffix()
    {
        return intval($this->getKey('Suffix'));
    }

    /**
     * Returns key: 'SubscriptionId'.
     *
     * @return integer
     */
    public function getSubscriptionId()
    {
        if (array_key_exists('subcid', $this->getKeys())) {
            return $this->getKey('subcid');         // cover for typo in chan-sccp
        }
        return $this->getKey('SubId');
    }

    /**
     * Returns key: 'Label'.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->getKey('Label');
    }

    /**
     * Returns key: 'CfwdType'.
     *
     * @return string
     */
    public function getCfwdType()
    {
        return $this->getKey('CfwdType');
    }

    /**
     * Returns key: 'CfwdNumber'.
     *
     * @return string
     */
    public function getCfwdNumber()
    {
        return $this->getKey('CfwdNumber');
    }
}
