<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2022 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Elements;

/**
 * VEDA_NAME := {Size=1:90}
 * A name of the veda saka(branch), guided by a guru or head of the family 
 * assigned to a particular Hindu Religious Institution, Vedic Monastery
 * that this person or family traditionaly learned with an inherited status.
 */
class VedaName extends AbstractElement
{
    protected const MAXIMUM_LENGTH = 90;

    protected const SUBTAGS = [
        'DATE' => '0:1',
        'PLAC' => '0:1',
        'NOTE' => '0:M',
        'OBJE' => '0:M',
        'SOUR' => '0:M',
        'RESN' => '0:1',
    ];
}
