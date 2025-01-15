<?php
class Bridge
{
    protected static int $count = 0;
    protected float $length;
    protected float $width;

    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
        self::$count++;
    }
    public static function getCount(): int
    {
        return self::$count;
    }
}

$bridge1 = new Bridge(10, 20);
$bridge2 = new Bridge(15, 25);
$bridge3 = new Bridge(30, 25);
$bridge4 = new Bridge(30, 25);
echo Bridge::getCount();


