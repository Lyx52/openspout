<?php

declare(strict_types=1);

namespace OpenSpout\Common\Entity\Cell;

use OpenSpout\Common\Entity\Cell;
use OpenSpout\Common\Entity\Comment\TextRun;
use OpenSpout\Common\Entity\Style\Style;

final class TextRunCell extends Cell
{
    /** @var TextRun[] */
    private array $textRuns;

    /**
     * @param TextRun[] $textRuns
     */
    public function __construct(
        array $textRuns,
        ?Style $style,
    ) {
        parent::__construct($style);
        $this->textRuns = $textRuns;
    }

    /**
     * @return TextRun[]
     */
    public function getValue(): array
    {
        return $this->textRuns;
    }
}
