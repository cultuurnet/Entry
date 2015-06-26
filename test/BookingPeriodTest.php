<?php
/**
 * @file
 */

namespace CultuurNet\Entry;


class PeriodTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     * @expectedException UnexpectedValueException
     */
    public function it_refuses_invalid_start_date() {
        new BookingPeriod('25-04-1985', '1985-04-25');
    }

    /**
     * @test
     * @expectedException UnexpectedValueException
     */
    public function it_refuses_invalid_end_date() {
        new BookingPeriod('1985-04-25', '25-04-1985');
    }

}
