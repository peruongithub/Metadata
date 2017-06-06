<?php
/*
 * This file is part of the Trident package.
 *
 * (c) Perederko Ruslan <perederko.ruslan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Trident\Components\Metadata\Interfaces;

use Trident\Components\Property\Interfaces\PropertyProviderInterface;

interface MetadataInterface extends PropertyProviderInterface
{
    /**
     * @param MetadataInterface $metadata
     */
    public function merge(MetadataInterface $metadata);
    /**
     * @return array
     */
    public function toArray();
}