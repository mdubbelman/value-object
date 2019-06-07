<?php
namespace BluebirdDay\ValueObject\Date;

use BluebirdDay\ValueObject\AbstractValueObject;

class DateTime extends AbstractValueObject
{
    /** @var  \DateTime */
    protected $date;

    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * @param \DateTime $date
     *
     * @throws \Exception
     */
    public function __construct($date = null)
    {
        if ($date instanceof \DateTime) {
            $this->date = $date;
        } else {
            try {
                $this->date = new \DateTime($date);
            } catch (\Exception $e) {
                throw new \InvalidArgumentException('Invalid date provided: ' . $date);
            }
        }
    }

    public function setDateFormate(string $format)
    {
        $this->dateFormat = $format;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->date->format($this->dateFormat);
    }

    /**
     * @return $this
     * @throws \Exception
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
