# Contributing

Guidelines for contributing to this Symfony Console project.

## Getting Started

1. Clone the repository
2. Install dependencies: `composer install`
3. Review AGENTS.md for available development tools
4. Check .copilot.md for coding guidelines

## Development Workflow

### Before Starting Work
- Read the project's .copilot.md and AGENTS.md files
- Check the current structure and existing patterns
- Run baseline tests to ensure the project is healthy

### Making Changes
- Create a focused branch for your changes
- Follow the coding guidelines in .copilot.md
- Make atomic, well-described commits
- Test your changes before submitting

### Using Copilot Agents
- Use **explore** to understand code structure
- Use **task** for running tests and build operations
- Use **general-purpose** for complex refactoring
- Use **code-review** to review your work

## Code Standards

- **Language**: PHP 7.4+
- **Standards**: PSR-12
- **Type Hints**: Required for all public methods
- **Documentation**: DocBlocks for all public APIs

## Testing

- Add tests for new features
- Ensure existing tests continue to pass
- Use PHPUnit as the testing framework

## Documentation

- Update README.md for user-facing changes
- Add docblocks to new methods
- Document command options and arguments
- Update this file if you change processes

## Questions?

Refer to AGENTS.md for the appropriate agent to ask about project-specific questions:
- Code structure: Use `explore`
- Build/test issues: Use `task`
- Large refactors: Use `general-purpose`
- Code review: Use `code-review`
