<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\Profile\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\Profile\Models;

use phpOMS\Stdlib\Base\Enum;

/**
 * Contact type enum.
 *
 * @package Modules\Profile\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
abstract class ContactType extends Enum
{
    public const PHONE = 1;

    public const FAX = 2;

    public const WEBSITE = 3;

    public const EMAIL = 4;
}
