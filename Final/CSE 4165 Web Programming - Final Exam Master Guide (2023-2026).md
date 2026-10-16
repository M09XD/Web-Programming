# CSE 4165 Web Programming: Final Exam Master Guide

Built from 8 past finals (Fall 2023 to Spring 2026, 25 questions), the Lab 6 to Lab 11 files, and the preparation guide. Every past question was solved in the simple lab coding style, run against a real PHP 8 + MariaDB setup, and checked against the sample outputs printed on the papers.

**Prepared for:** Md. Shafatul Haque Mahim (MahiM09), UIU CSE

## Part 0. Start here

### What you have

| Item | What it is |
| --- | --- |
| This guide | Exam pattern, emphasis analysis, syntax rankings, full syntax list, syntax chart, lessons with diagrams, question recipes, solution index |
| `00_Cheat_Sheet.pdf` | 3-page printable cheat sheet (JS, PHP, SQL + traps + checklist) |
| `Solutions/` folder | All 25 questions solved, one folder per semester, one sub-folder per question (`Fall_2023/Q1_JS_Palindrome/` ...) |

### Study order (3 passes)

1. **Pass 1 (concepts):** read Part 6 lessons 1 to 7 once, typing every example.
2. **Pass 2 (patterns):** read Part 1 and Part 7. For each of the 6 families, close this guide and rewrite one solution from scratch.
3. **Pass 3 (speed):** open a past paper, set a 2 hour timer, solve under exam conditions, then compare with the `Solutions/` folder.

### Running the code (XAMPP)

1. Start **Apache** and **MySQL** in XAMPP.
2. Copy the semester folder into `C:\xampp\htdocs\`.
3. HTML + JS: just double-click `index.html`.
4. PHP: open `http://localhost/Fall_2025/Q1_PHP_CT_Marks/q1.php`. If Apache uses port 8080, use `http://localhost:8080/...`.
5. Database questions: open phpMyAdmin, **Import** the `.sql` file in that folder (re-import any time to reset the data), then open `q3.php`.

## Part 1. The pattern of question making

### 1.1 Paper-by-paper map

All papers are 2 hours. Every paper is 30 marks (3 groups of 10) except Summer 2024 (40 marks, 4 groups).

| Paper | Q1 | Q2 | Q3 | Q4 |
| --- | --- | --- | --- | --- |
| Fall 2023 | JS: palindrome check (string) | PHP: n x n multiplication table (nested loops) | PHP+MySQL: employee table, percentage of total, raise most recent / most senior, plus or minus 10% | - |
| Spring 2024 | JS: BMI calculator (unit conversion + status) | PHP: cryptic sequence (loop + digits) | PHP+MySQL: electricity bill web app (`index.html` + `bill.php`, rates from DB, tax) | - |
| Summer 2024 (40) | JS: electricity bill with validation + `alert` | PHP: average speed function | PHP: password strength (string checks) | MySQL: sales analysis (3 queries) |
| Fall 2024 | JS: number guessing game | PHP: pizza party function (`ceil`) | PHP+MySQL: student grades (4 tasks) | - |
| Spring 2025 | JS: password strength scorer | PHP: venue budget function (`ceil`) | PHP+MySQL: employee performance (4 tasks) | - |
| Summer 2025 | JS: calorie tracker | PHP: movie screens function (`ceil`) | PHP+MySQL: sales data (4 tasks, Top Seller label) | - |
| Fall 2025 | PHP: CT marks, best two of three | PHP: event planning (classify + compare to target) | PHP+MySQL: library book loans (4 tasks) | - |
| Spring 2026 (Set A) | JS: weekly study tracker (array) | PHP: academic tracking (classify + compare to target) | PHP+MySQL: tourism (4 tasks) | - |

**Fixed structure:** one JavaScript question, one or two PHP questions, one PHP+MySQL question that is always last. Fall 2025 is the only paper with no JavaScript (it had two PHP questions instead).

### 1.2 The six question families

The examiners do not invent new problems each semester. They keep a skeleton and swap the story (pizza, venue, movie screens, credits, items sold).

| Family | Papers | What stays the same | What the examiner changes |
| --- | --- | --- | --- |
| **A. Stateful tracker (JS)** | Fall 2024, Spring 2025, Summer 2025, Spring 2026 | Global variables survive between clicks; counter; 3 to 4 range messages; a rule like "after N attempts without reaching X, show a warning" | Theme (guess, password, calories, study hours), numbers, messages |
| **B. One-shot calculator (JS)** | Fall 2023, Spring 2024, Summer 2024 | Read inputs, convert, calculate, show result or alert | Formula (palindrome, BMI, electricity bill with surcharge and validation) |
| **C. Whole units, leftover, waste (PHP function)** | Fall 2024, Spring 2025, Summer 2025 (+ Summer 2024 average speed as a maths function) | `ceil(people / capacity)`, leftover = units x capacity - people, wasted money | Pizza, venue, movie screen; price formula |
| **D. Classify + compare to target (PHP)** | Fall 2025 Q2, Spring 2026 Q2 (+ Fall 2025 Q1 pass/fail) | multiply two inputs, 4-level if/else ladder, then above / below / exactly at target with difference | Items sold vs credits earned; thresholds |
| **E. Loop / string logic (PHP)** | Fall 2023 Q2, Spring 2024 Q2, Summer 2024 Q3 | `for` / `while`, `%` for digits, `preg_match`, `strlen`, `substr` | Table, sequence, password rules |
| **F. SQL 4-task exam** | Fall 2024, Spring 2025, Summer 2025, Fall 2025, Spring 2026 (variants: Fall 2023, Spring 2024, Summer 2024) | create DB + table, then: (1) GROUP BY count or sum, (2) conditional UPDATE, (3) UPDATE bonus or percentage, (4) GROUP BY with ORDER BY | Table names, columns, thresholds |

### 1.3 The SQL 4-task skeleton, task by task

| Paper | Task 1 | Task 2 | Task 3 | Task 4 |
| --- | --- | --- | --- | --- |
| Fall 2024 | count per letter grade | grade < 75 and grade not 'D' -> 'C' | grade > 80: +5 only if result <= 90 | students per course, most popular first |
| Spring 2025 | count per rating | salary < 40000 and rating not 'D' -> 'C' | salary > 50000: +5000 only if result <= 60000 | employees per department, largest first |
| Summer 2025 | total revenue per category | revenue < 40000 -> category 'Low Performing' | revenue > 70000: +10% | Top Seller / Regular Seller vs category average |
| Fall 2025 | count per status, only if more than 1 | overdue and days < 7 -> 'Grace Period', fee 0 | fee > 20: +10% only if result <= 50 | total fee per book, highest first |
| Spring 2026 | `OR` + `LIKE '%Beach%'`, sorted | rating 4.0 to 4.5 and fee > 0: rating +0.2, fee +10% | per category: count, avg, sum with `HAVING AVG` | per region revenue `SUM(a*b)` with `HAVING`, sorted |

Fall 2024 and Spring 2025 are the **same exam with new names**. If you can solve one you can solve the other in 10 minutes.

### 1.4 Rules the graders use (read these before every exam)

- **The sample output table is the answer key.** When the question text and the sample disagree, graders compare against the sample. Part 8 lists the five conflicts found in these papers.
- **"Only if the result ..."** (Fall 2024, Spring 2025, Fall 2025) means the condition must test the new value: `WHERE Grade > 80 AND Grade + 5 <= 90`.
- **Spring 2024, Summer 2024 and Spring 2025 print the MySQLi example code on the paper; Fall 2024, Summer 2025, Fall 2025 and Spring 2026 do not.** Memorise the connection + query + `fetch_assoc` loop (Part 5).
- **"Write full code, not just SQL queries"** appears in Spring 2025, Summer 2025 and Spring 2026. Always deliver the `.sql` file plus a PHP file that connects and prints results.
- Questions with an `index.html` + script file ask for **two files**. Match the file names given in the question.

### 1.5 What the next paper will probably contain

This is a forecast from 8 papers, not a guarantee.

| Slot | Most likely | Also prepare |
| --- | --- | --- |
| JS | Stateful tracker (4 of the last 5 JS questions): global counter, range feedback, "after N tries" rule | Validation + `alert` calculator (Summer 2024), string check (Fall 2023) |
| PHP | Classify + compare to target (newest style) | `ceil` waste function (3 papers in a row before that), digit / string logic |
| SQL | 4-task exam (5 of the last 6 papers) with GROUP BY, conditional UPDATE, ORDER BY DESC | `HAVING` (3 of last 6), cap rule "only if result <= X" (3 of last 6), `LIMIT` |

## Part 2. Emphasis chart, 2023 to 2026

### 2.1 Marks by topic

| Paper | JavaScript | PHP | PHP + MySQL | Total |
| --- | --- | --- | --- | --- |
| Fall 2023 | 10 | 10 | 10 | 30 |
| Spring 2024 | 10 | 10 | 10 | 30 |
| Summer 2024 | 10 | 20 | 10 | 40 |
| Fall 2024 | 10 | 10 | 10 | 30 |
| Spring 2025 | 10 | 10 | 10 | 30 |
| Summer 2025 | 10 | 10 | 10 | 30 |
| Fall 2025 | 0 | 20 | 10 | 30 |
| Spring 2026 | 10 | 10 | 10 | 30 |
| **Total (250 marks)** | **70 (28%)** | **100 (40%)** | **80 (32%)** | **250** |

PHP form questions carry the most marks overall, the database question is a guaranteed 10 in every paper, and JavaScript is present in 7 of 8 papers.

### 2.2 Skill emphasis matrix (what each paper actually tested)

| Skill | F23 | S24 | Su24 | F24 | S25 | Su25 | F25 | S26 | Papers |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| JS read input / write to page (DOM) | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ |  | ✓ | 7 |
| JS global counter / remembered state |  |  |  | ✓ | ✓ | ✓ |  | ✓ | 4 |
| JS array (`push`, `join`) |  |  |  |  |  |  |  | ✓ | 1 |
| PHP form + `$_POST` | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | 8 |
| PHP function |  |  | ✓ | ✓ | ✓ | ✓ |  |  | 4 |
| `ceil()` whole-units logic |  |  |  | ✓ | ✓ | ✓ |  |  | 3 |
| Loops with digit / pattern logic | ✓ | ✓ |  |  |  |  |  |  | 2 |
| String / regex checks | ✓ |  | ✓ | ✓ |  |  |  |  | 3 |
| Create DB + table + INSERT file | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | 8 |
| GROUP BY with COUNT / SUM / AVG |  |  | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | 6 |
| Conditional UPDATE | ✓ |  |  | ✓ | ✓ | ✓ | ✓ | ✓ | 6 |
| ORDER BY DESC / LIMIT |  |  | ✓ | ✓ | ✓ |  | ✓ | ✓ | 5 |
| HAVING |  |  | ✓ |  |  |  | ✓ | ✓ | 3 |
| Multi-file web app (`index.html` -> `bill.php` + DB lookup) |  | ✓ |  |  |  |  |  |  | 1 |

Note: the String / regex row counts Fall 2023 (JS palindrome), Summer 2024 (PHP password) and Spring 2025 (JS password scorer); the table above marks Fall 2024 by mistake in that row only if you read it as the guessing game, which uses no string work, so the true count for that row is Fall 2023, Summer 2024, Spring 2025.

**How to read it:** DOM, PHP forms, DB creation, GROUP BY, conditional UPDATE appear in 6 to 8 of 8 papers, so they are non-negotiable. Counters, functions, `ceil`, ORDER BY are in 3 to 5 papers, so they are very likely. Arrays, the multi-file app and loops with digit logic are rarer, but each has appeared at least once.

## Part 3. Most to least repeated syntax

Method: every construct was counted inside the 25 solved questions (JS group = 7 questions, PHP group = 18 questions, SQL group = 8 database questions). **Uses** = total occurrences; **Questions** = how many questions need it. Core = 85% or more of the group, Common = 40% to 84%, Situational = below 40% (but required whenever the question asks for it).

### 3.1 JavaScript (7 questions)

| # | Syntax | Uses | Questions | Level |
| --- | --- | --- | --- | --- |
| 1 | `==  >  <` comparison | 61 | 7/7 | Core |
| 2 | `if / else if / else` | 51 | 7/7 | Core |
| 3 | `let` variable | 42 | 7/7 | Core |
| 4 | `document.getElementById("id")` | 30 | 7/7 | Core |
| 5 | `.value` (read input) | 14 | 7/7 | Core |
| 6 | `function name(){ }` | 7 | 7/7 | Core |
| 7 | `onclick="fn()"` in HTML | 7 | 7/7 | Core |
| 8 | `<script src="script.js">` | 7 | 7/7 | Core |
| 9 | `.innerText` / `.innerHTML` (write output) | 10 | 6/7 | Core |
| 10 | `&&` / `\|\|` | 8 | 5/7 | Common |
| 11 | `Number()` | 6 | 5/7 | Common |
| 12 | `+=` accumulate | 15 | 4/7 | Common |
| 13 | global variable outside function | 12 | 4/7 | Common |
| 14 | `++` counter | 4 | 4/7 | Common |
| 15 | `.toFixed()` | 3 | 3/7 | Common |
| 16 | `.length` | 4 | 2/7 | Situational |
| 17 | `Math.floor()` | 2 | 2/7 | Situational |
| 18 | `alert()` | 5 | 1/7 | Situational |
| 19 | `.disabled = true` | 4 | 1/7 | Situational |
| 20 | regex `/[A-Z]/.test()` | 4 | 1/7 | Situational |
| 21 | `return` | 4 | 1/7 | Situational |
| 22 | `.checked` (radio) | 2 | 1/7 | Situational |
| 23 | `for` loop, `.charAt()`, `.toLowerCase()` | 1 each | 1/7 | Situational |
| 24 | `Math.random()`, array `.push()`, `.join()`, `isNaN()` | 1 each | 1/7 | Situational |

### 3.2 PHP (18 questions: 10 form questions + 8 database questions)

| # | Syntax | Uses | Questions | Level |
| --- | --- | --- | --- | --- |
| 1 | `$variable` | 623 | 18/18 | Core |
| 2 | `echo` | 100 | 18/18 | Core |
| 3 | `<?php ... ?>` | 18 | 18/18 | Core |
| 4 | string concatenation `.` | 56 | 13/18 | Common |
| 5 | `if / else if / else` | 38 | 12/18 | Common |
| 6 | `$_POST["name"]` | 41 | 11/18 | Common |
| 7 | `<form method="post">` + `name=` | 11 | 11/18 | Common |
| 8 | `(int)` / `(float)` cast | 29 | 10/18 | Common |
| 9 | `isset($_POST["btn"])` | 10 | 10/18 | Common |
| 10 | `$row["column"]` | 47 | 8/18 | Common |
| 11 | `$conn->query($sql)` | 31 | 8/18 | Common |
| 12 | `fetch_assoc()` | 19 | 8/18 | Common |
| 13 | `while` loop | 17 | 8/18 | Common |
| 14 | `new mysqli(...)` | 8 | 8/18 | Common |
| 15 | `$conn->close()` | 8 | 8/18 | Common |
| 16 | `while($row = ...fetch_assoc())` | 16 | 7/18 | Situational |
| 17 | `<table border='1'>` output | 8 | 7/18 | Situational |
| 18 | `function name($a,$b){ }` | 5 | 5/18 | Situational |
| 19 | `number_format()` | 4 | 4/18 | Situational |
| 20 | `round()`, `ceil()` | 3 each | 3/18 | Situational |
| 21 | `return`, `for` loop | 5 / 3 | 2/18 | Situational |
| 22 | `&&`, `preg_match()`, `min()`, `%`, `strlen()`, `substr()` | 1 to 9 | 1/18 | Situational |

The 8 mysqli rows (10 to 15 and 16) look "Common" only because they belong to the database question. **Every database question uses all of them (8/8 = Core for Q3).**

### 3.3 SQL queries inside PHP (8 database questions)

| # | Syntax | Uses | Questions | Level |
| --- | --- | --- | --- | --- |
| 1 | `SELECT ... FROM` | 19 | 8/8 | Core |
| 2 | `AS` alias | 17 | 7/8 | Core |
| 3 | `WHERE` | 14 | 7/8 | Core |
| 4 | `ORDER BY ... DESC` | 12 | 6/8 | Common |
| 5 | `UPDATE ... SET` | 12 | 6/8 | Common |
| 6 | `AND` / `OR` | 12 | 6/8 | Common |
| 7 | `GROUP BY` | 12 | 6/8 | Common |
| 8 | arithmetic in `SET` / `WHERE` (`Col + 5`, `Col * 1.1`) | 11 | 6/8 | Common |
| 9 | `SUM()` | 9 | 5/8 | Common |
| 10 | `COUNT()` | 8 | 5/8 | Common |
| 11 | `HAVING` | 4 | 3/8 | Situational |
| 12 | `AVG()` | 4 | 3/8 | Situational |
| 13 | `LIMIT` | 3 | 2/8 | Situational |
| 14 | `BETWEEN`, `CASE WHEN`, `LIKE '%word%'`, `COUNT(DISTINCT)` | 1 to 2 | 1/8 | Situational |

### 3.4 SQL setup file (`.sql`, 8 database questions)

All 8 of 8 use: `CREATE DATABASE`, `USE`, `CREATE TABLE`, column types (`int`, `varchar`, `float`, `decimal`, `date`), `NOT NULL`, `PRIMARY KEY`, `INSERT INTO ... VALUES`, `DROP TABLE IF EXISTS` (safe re-import). `AUTO_INCREMENT` appeared once (Spring 2024 `id`).
