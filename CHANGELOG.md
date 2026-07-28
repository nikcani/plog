# Changelog

All notable changes to `plog` will be documented in this file.

## 0.2.2 - 2026-07-28

- Loosen `illuminate/contracts` and `orchestra/testbench` from pinned exact versions to caret constraints (`^13.23.0` / `^11.1.0`)
- Update `spatie/laravel-package-tools` to `^1.93.1`
- Switch dependency automation from Dependabot to Renovate (shared org config)
- Update dev tooling: Pest 5, Larastan 3.10, Pint 1.29, PHPStan extensions

## 0.2.1 - 2026-07-06

- Fix CI test failure when no code coverage driver is available (coverage is now only collected when explicitly requested)
- Reach 100% test coverage

## 0.2.0 - 2026-07-06

- Require PHP 8.3+ (drops PHP 8.2 support)
- CI: test against PHP 8.3–8.5 and Laravel 13 / Testbench 11 / Carbon 3

## 0.1.0 - 2026-07-06

- Support Laravel 13 (illuminate/contracts v13)
- Update dev tooling: Pest 4, Testbench 11, PHPStan updates
- Fix `composer analyse` crashing on the default PHP memory limit
