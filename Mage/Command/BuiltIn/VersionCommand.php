<?php
/*
 * This file is part of the Magallanes package.
*
* (c) Andrés Montañez <andres@andresmontanez.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Mage\Command\BuiltIn;

use Mage\Command\AbstractCommand;
use Mage\Console;

/**
 * Command for displaying the Version of Magallanes
 *
 * @author Andrés Montañez <andres@andresmontanez.com>
 */
class VersionCommand extends AbstractCommand
{
	/**
	 * Display the Magallanes Version
	 * @see \Mage\Command\AbstractCommand::run()
	 */
    public function run()
    {
        Console::output('Running <blue>Magallanes</blue> version <dark_gray>' . MAGALLANES_VERSION .'</dark_gray>', 0, 2);
    }

}