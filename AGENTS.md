# Agents

This document describes the specialized agents available for this project.

## Available Agents

### explore
Fast agent for exploring the codebase and answering questions about code.
- **Best for**: Finding files by patterns, searching code for keywords, understanding how parts of the system work
- **Example uses**: 
  - "Where are the Symfony commands defined?"
  - "Find all command classes in src/"
  - "How does the console application bootstrap?"

### task
Agent for executing commands with verbose output (tests, builds, lints, dependency installs).
- **Best for**: Running tests, builds, linting, and dependency management
- **Example uses**:
  - "Run the test suite"
  - "Install dependencies"
  - "Check code quality"

### general-purpose
Full-capability agent for complex multi-step tasks.
- **Best for**: Tasks requiring multiple steps, refactoring, architectural changes
- **Example uses**:
  - "Refactor the command structure"
  - "Add a new feature with proper testing"
  - "Reorganize the project structure"

### code-review
Agent for reviewing code changes with high signal-to-noise ratio.
- **Best for**: Analyzing code changes, identifying bugs and issues, security review
- **Example uses**:
  - "Review the changes I made"
  - "Check for bugs in the new code"
  - "Security audit of authentication logic"

## Project-Specific Notes

- **Language**: PHP
- **Framework**: Symfony Console
- **Package Manager**: Composer
- **Main Directory**: `/home/charles/projects/symfony-console-getting-started`

## Common Tasks

### Exploring
```bash
# Find command definitions
copilot explore "Where are Symfony commands defined?"

# Understand the application structure
copilot explore "How does the console app work?"
```

### Testing & Building
```bash
# Run tests or linter
copilot task "Run tests and linting"

# Install/update dependencies
copilot task "Install composer dependencies"
```

### Development
```bash
# Make significant changes
copilot general-purpose "Refactor command handling"

# Review work
copilot code-review "Review my code changes"
```
