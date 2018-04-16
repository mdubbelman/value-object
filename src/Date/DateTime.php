<?php
namespace BluebirdDay\ValueObject\Date;

use BluebirdDay\ValueObject\ValueObjectInterface;

class DateTime implements ValueObjectInterface
{
    /** @var  \DateTime */
    protected $date;

    public static $dateFormat = 'Y-m-d H:i:s';

    /**
     * @param \DateTime $date
     */
    public function __construct($date = null)
    {
        if ($date instanceof \DateTime) {
            $this->date = $date;
        } else {
            $this->date = new \DateTime($date);
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->date->format(static::$dateFormat);
    }

    /**
     * @return $this
     */
    public function setToNow()
    {
        $this->date = new \DateTime();

        return $this;
    }

    /**
     * @param $format
     *
     * @return string
     */
    public function format($format)
    {
        return $this->date->format($format);
    }

    /**
     * @param \DateTimeZone $dateTimeZone
     *
     * @return $this
     */
    public function setTimeZone(\DateTimeZone $dateTimeZone)
    {
        $this->date->setTimezone($dateTimeZone);

        return $this;
    }
}
