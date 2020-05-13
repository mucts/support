<?php
/**
 * This file is part of the mucts.com.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 * @version 1.0
 * @author herry<yuandeng@aliyun.com>
 * @copyright © 2020 MuCTS.com All Rights Reserved.
 */

namespace MuCTS\Support;

use Carbon\Carbon as CarbonBase;

class Carbon extends CarbonBase
{
    /**
     * microsecond since the Unix Epoch
     * @return int
     */
    public function getTimestampMs()
    {
        return intval($this->timestamp . str_pad(substr($this->microsecond, 0, 3), 3, '0', STR_PAD_RIGHT));
    }
}