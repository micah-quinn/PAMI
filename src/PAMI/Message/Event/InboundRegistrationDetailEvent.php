<?php
/**
 * Event from PJSIPShowRegistrationsInbound
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Niklas Larsson <niklas@tese.se>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2015 Niklas Larsson <niklas@tese.se>, Marcelo Gornstein <marcelog@gmail.com>
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
 * Event from PJSIPShowRegistrationsInbound
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Niklas Larsson <niklas@tese.se>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class InboundRegistrationDetailEvent extends EventMessage
{
    /**
     * Returns key: 'ObjectType'. The object's type. This will always be 'aor'.
     *
     * @return string
     */
    public function getObjectType()
    {
        return $this->getKey('ObjectType');
    }

    /**
     * Returns key: 'ObjectName'. The name of this object.
     *
     * @return string
     */
    public function getObjectName()
    {
        return $this->getKey('ObjectName');
    }

    /**
     * Returns key: 'MinimumExpiration'. Minimum keep alive time for an AoR
     *
     * @return string
     */
    public function getMinimumExpiration()
    {
        return $this->getKey('MinimumExpiration');
    }

    /**
     * Returns key: 'MaximumExpiration'. Maximum time to keep an AoR
     *
     * @return string
     */
    public function getMaximumExpiration()
    {
        return $this->getKey('MaximumExpiration');
    }

    /**
     * Returns key: 'DefaultExpiration'. Default expiration time in seconds for contacts that are dynamicallybound to an AoR.
     *
     * @return string
     */
    public function getDefaultExpiration()
    {
        return $this->getKey('DefaultExpiration');
    }

    /**
     * Returns key: 'QualifyFrequency'. Interval at which to qualify an AoR
     *
     * @return string
     */
    public function getQualifyFrequency()
    {
        return $this->getKey('QualifyFrequency');
    }

    /**
     * Returns key: 'AuthenticateQualify'. Authenticates a qualify request if needed
     *
     * @return string
     */
    public function getAuthenticateQualify()
    {
        return $this->getKey('AuthenticateQualify');
    }

    /**
     * Returns key: 'MaxContacts'. Maximum number of contacts that can bind to an AoR
     *
     * @return string
     */
    public function getMaxContacts()
    {
        return $this->getKey('MaxContacts');
    }

    /**
     * Returns key: 'RemoveExisting'. Determines whether new contacts replace existing ones.
     *
     * @return string
     */
    public function getRemoveExisting()
    {
        return $this->getKey('RemoveExisting');
    }

    /**
     * Returns key: 'Mailboxes'. Allow subscriptions for the specified mailbox(es)
     *
     * @return string
     */
    public function getMailboxes()
    {
        return $this->getKey('Mailboxes');
    }

    /**
     * Returns key: 'OutboundProxy'. Outbound proxy used when sending OPTIONS request
     *
     * @return string
     */
    public function getOutboundProxy()
    {
        return $this->getKey('OutboundProxy');
    }

    /**
     * Returns key: 'SupportPath'. Enables Path support for REGISTER requests and Route support forother requests.
     *
     * @return string
     */
    public function getSupportPath()
    {
        return $this->getKey('SupportPath');
    }

    /**
     * Returns key: 'TotalContacts'. The total number of contacts associated with this AoR.
     *
     * @return string
     */
    public function getTotalContacts()
    {
        return $this->getKey('TotalContacts');
    }

    /**
     * Returns key: 'ContactsRegistered'. The number of non-permanent contacts associated with this AoR.
     *
     * @return string
     */
    public function getContactsRegistered()
    {
        return $this->getKey('ContactsRegistered');
    }

    /**
     * Returns key: 'EndpointName'. The name of the endpoint associated with this information.
     *
     * @return string
     */
    public function getEndpointName()
    {
        return $this->getKey('EndpointName');
    }

    /**
     * Returns key: 'Contact'.
     *
     * @return string
     */
    public function getContact()
    {
        return $this->getKey('Contact');
    }

    /**
     * Returns key: 'Contacts'.
     *
     * @return string
     */
    public function getContacts()
    {
        return $this->getKey('Contacts');
    }
}
