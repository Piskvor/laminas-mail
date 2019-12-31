<?php

/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mail/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Mail\Header;

/**
 * @todo       Add accessors for setting date from DateTime, Laminas\Date, or a string
 * @category   Laminas
 * @package    Laminas_Mail
 * @subpackage Header
 */
class Date implements HeaderInterface
{
    /**
     * @var string
     */
    protected $value;

    public static function fromString($headerLine)
    {
        list($name, $value) = explode(': ', $headerLine, 2);

        // check to ensure proper header type for this factory
        if (strtolower($name) !== 'date') {
            throw new Exception\InvalidArgumentException('Invalid header line for Date string');
        }

        $header = new static();
        $header->value= $value;

        return $header;
    }

    public function getFieldName()
    {
        return 'Date';
    }

    public function getFieldValue($format = HeaderInterface::FORMAT_RAW)
    {
        return $this->value;
    }

    public function setEncoding($encoding)
    {
        // This header must be always in US-ASCII
        return $this;
    }

    public function getEncoding()
    {
        return 'ASCII';
    }

    public function toString()
    {
        return 'Date: ' . $this->getFieldValue();
    }
}
