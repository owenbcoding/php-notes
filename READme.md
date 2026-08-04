# PHP Fundamentals — Practice Repo

This is a **practice repo for revising PHP concepts and logic**, built while working through Laracasts' "PHP Fundamentals" course. It's not a production app — it's a scratchpad for drilling core PHP syntax, patterns, and small exercises so the ideas stick.

## How it's organized

- **`01-your-first-php-tag/` through `17-sql-injection-vulnerabilities-and-prepared-statements/`**
  One folder per lesson topic, each containing an `index.php` with runnable code for that concept (variables, arrays, functions, routing, PDO, SQL injection prevention, etc.). Folders are numbered in the order the topics were covered.

- **`videolessonpractice.php`**
  A single scratch file with numbered practice problems (e.g. `1a`, `1b`, `2a`...) matching the lesson topics above. Each problem is worked through directly beneath its prompt comment.

- **`notes.md`**
  A running cheat sheet — one section per lesson with the key takeaways and syntax reminders, plus a table of useful built-in PHP functions.

## Running it

Start PHP's built-in server from the repo root:

```bash
php -S localhost:8888
```

Then visit `localhost:8888/<folder>/index.php` for a given lesson, or `localhost:8888/videolessonpractice.php` for the practice problems.
