<?php

declare(strict_types=1);

/*
 * GCAPIForESTLabLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GCAPIForESTLabLib\Exceptions;

class M404ErrorException extends ApiException
{
    /**
     * @var string|null
     */
    private $codeProperty;

    /**
     * @var string|null
     */
    private $messageProperty;

    /**
     * @var array|null
     */
    private $data;

    /**
     * Returns Code Property.
     */
    public function getCodeProperty(): ?string
    {
        return $this->codeProperty;
    }

    /**
     * Sets Code Property.
     *
     * @maps code
     */
    public function setCodeProperty(?string $codeProperty): void
    {
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Message Property.
     */
    public function getMessageProperty(): ?string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     *
     * @maps message
     */
    public function setMessageProperty(?string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }

    /**
     * Returns Data.
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
    }
}
