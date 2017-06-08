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


interface MetadataProviderInterface
{
    /**
     * @return MetadataInterface
     */
    public function getMetadata():MetadataInterface;

    /**
     * @param MetadataInterface $metadata
     */
    public function setMetadata(MetadataInterface $metadata);

    /**
     * @param MetadataInterface $metadata
     * @return MetadataInterface
     */
    public function merge(MetadataInterface $metadata):MetadataInterface;
}