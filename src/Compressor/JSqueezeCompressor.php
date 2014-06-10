<?php

/*
 * This file is part of HtmlCompress.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WyriHaximus\HtmlCompress\Compressor;

/**
 * Class JSqueezeCompressor
 *
 * @package WyriHaximus\HtmlCompress\Compressor
 */
class JSqueezeCompressor extends Compressor {

    /**
     * {@inheritdoc}
     */
    protected function execute($string) {
        $parser = new \JSqueeze();
        return $parser->squeeze($string);
    }
}
