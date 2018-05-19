<?php

declare(strict_types=1);

namespace ChangelogGenerator;

class IssueGroup
{
    /** @var string */
    private $name;

    /** @var Issue[] */
    private $issues = [];

    /**
     * @param Issue[] $issues
     */
    public function __construct(string $name, array $issues = [])
    {
        $this->name   = $name;
        $this->issues = $issues;
    }

    public function getName() : string
    {
        return $this->name;
    }

    /** @return Issue[] */
    public function getIssues() : array
    {
        return $this->issues;
    }

    public function addIssue(Issue $issue) : void
    {
        $this->issues[] = $issue;
    }
}
