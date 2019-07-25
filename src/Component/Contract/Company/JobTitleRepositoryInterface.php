<?php
/**
 * This file is part of the Semart HRIS Application.
 *
 * (c) Muhamad Surya Iksanudin <surya.kejawen@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace KejawenLab\Semart\Skeleton\Component\Contract\Company;

use KejawenLab\Semart\Skeleton\Contract\Repository\CacheableRepositoryInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
interface JobTitleRepositoryInterface extends CacheableRepositoryInterface
{
    /**
     * @param int $level
     *
     * @return JobTitleInterface[]
     */
    public function findSupervisors(int $level): array;
}
