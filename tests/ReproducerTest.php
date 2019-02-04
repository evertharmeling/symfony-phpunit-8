<?php
declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\Assert;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * @author Evert Harmeling <evert@freshheads.com>
 */
final class ReproducerTest extends KernelTestCase
{
    public function testTheObvious(): void
    {
        Assert::assertTrue(true);
    }
}
