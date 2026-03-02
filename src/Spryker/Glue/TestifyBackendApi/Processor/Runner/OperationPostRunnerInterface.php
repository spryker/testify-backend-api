<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\TestifyBackendApi\Processor\Runner;

use Generated\Shared\Transfer\DynamicFixturesRequestBackendApiAttributesTransfer;

interface OperationPostRunnerInterface
{
    public function executePostOperations(
        DynamicFixturesRequestBackendApiAttributesTransfer $dynamicFixturesRequestBackendApiAttributesTransfer
    ): void;
}
