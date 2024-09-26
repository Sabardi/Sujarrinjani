<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StatusEnum extends Enum
{
    const Paid = 'Paid';
    const NotYetPaid = 'Not yet paid';
    const Pending = 'Pending';
}
