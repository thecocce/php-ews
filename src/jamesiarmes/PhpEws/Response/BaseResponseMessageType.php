<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\BaseResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

use \jamesiarmes\PhpEws\Response;

/**
 * Base class for responses.
 *
 * @package php-ews\Types
 */
class BaseResponseMessageType extends Response
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}