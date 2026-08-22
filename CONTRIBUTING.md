# Contributing to GIGOTECH Global Network — Landing Page

Thank you for contributing — your help keeps this project healthy and deployable.

## Where to start

- Read the main project README: [README.md](README.md) for setup and run instructions.
- Use the `development` branch for active work. Feature branches should be created from `development`.

## Branching & naming

- Update local branches:

```bash
git fetch origin
git checkout development
git pull origin development
```

- Create feature branches using this pattern:

```
feature/short-description
fix/short-description
chore/short-description
```

## Commit messages

Use Conventional Commits style for clear history, e.g.:

```
feat: add hero section
fix: correct responsive header spacing
chore: bump tailwind version
```

## Pull request workflow

1. Push your feature branch:

```bash
git push -u origin feature/your-short-description
```

2. Open a Pull Request targeting `development` and include:
- A clear title and description
- Link to an issue (if applicable)
- Screenshots or short GIFs for UI changes
- Testing notes and commands to reproduce

3. PR checklist (ensure the following before requesting review):
- [ ] Branch is up to date with `development`
- [ ] All automated tests pass locally: `composer test` or `php artisan test`
- [ ] PHP formatted with Pint: `vendor/bin/pint --format`
- [ ] JS/CSS build works: `npm run build` (or `npm run dev` during development)
- [ ] No sensitive data in the changes (no secrets in `.env` or commits)

4. Request review from the relevant reviewers and add the appropriate labels.

## Code review & approvals

- Each PR should have at least one approving review from a project maintainer.
- Significant or breaking changes should have two approvers and/or explicit maintainer approval before merging.
- Merge strategy: prefer squash-and-merge to keep `development` history concise unless the team prefers preserving commits.

## Tests

- Add or update tests when changing behavior. Run the test suite locally:

```bash
composer test
```

- For frontend changes, ensure Vite builds and that interactive scripts run as expected.

## CI and quality

- The repository may use CI to run tests and checks. Ensure your PR passes CI before merging.

## Code ownership

- This repository includes a CODEOWNERS file to automatically request reviews from owners for specific paths. 

## Small fixes

- Minor docs or typo fixes may be merged directly into `development` by maintainers. When in doubt, open a PR.

## Security issues

- Do not open public issues for security-sensitive vulnerabilities. Contact repository maintainers privately or use the responsible disclosure channel configured for the organization.

## Questions

If you're unsure about anything, open an issue or contact the maintainers for guidance.

Thank you for contributing!
