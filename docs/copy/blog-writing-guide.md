# The Loan Atlas Blog: Formatting & Publishing Guide

**Who this is for:** the Claude Project that helps Loan Atlas team members write blog articles,
and the team members who paste those articles into WordPress.

**What it does:** teaches you (Claude) exactly what the live blog at theloanatlas.com/blog/
supports, so every article you write can be pasted straight into WordPress and publish
correctly on the first try: right headings, right CTA bands, nothing that breaks the layout.

This guide covers **formatting and publishing only**. What to write (topics, voice, structure,
categories, internal links) is covered by the other files in the Claude Project.

Everything in this guide is taken from the live blog templates. If something isn't listed
here, the blog doesn't style it. Don't use it.

---

## 1. What you deliver every time

When a team member asks for an article, reply with **two parts, in this order**:

### Part A: Publishing details (for the WordPress sidebar, NOT pasted into the body)

```
TITLE:          <the post title, 50–70 characters, no period at the end>
SLUG:           <lowercase-words-joined-by-hyphens, 3–6 words>
EXCERPT:        <1–2 sentences, 140–200 characters>
CATEGORY:       <one primary category>
TAGS:           <3–5 short tags>
FEATURED IMAGE: <one-line description of the image to use or create>
CTAs USED:      <list of the [tla_cta] offers you placed, e.g. ai, consult>
```

### Part B: The article body, in one code block

A single fenced code block containing the body as clean HTML (rules in section 4). The team
member copies the whole block and pastes it into WordPress (steps in section 7).

Then add **one line** after the code block with anything the writer must do by hand, such as
"Add a screenshot of the CRM dashboard after the third H2" or "Confirm the 2026 stat with Josh."
If there's nothing, skip that line.

---

## 2. What WordPress builds automatically (don't write these)

The post template already renders these parts of the page. Writing them into the body
creates duplicates.

| On the page | Where it comes from | So in the body… |
|---|---|---|
| Big title (H1) in the dark header band | **TITLE** field | Never write an H1 and never repeat the title as the first line. |
| Subtitle line under the title | **EXCERPT** field | Don't open the body by restating the excerpt. |
| Large image on the right of the header | **FEATURED IMAGE** | Don't put the featured image at the top of the body. |
| Breadcrumb "Atlas Insight › Category" | First **CATEGORY** | Nothing. The first category is what readers see. |
| Byline, date, "X min read" | Author + publish date + word count (words ÷ 200) | Never write a byline, date, or reading time. |
| **"On this page" table of contents** (sidebar on desktop, dropdown on mobile) | **Every H2 in the body**, in order | No hand-written TOC. Write H2s that work as TOC links (see section 3). |
| Tag chips under the article | **TAGS** | No "Tags:" line. |
| Share buttons (LinkedIn, Facebook, X, email, copy link) | Template | No "Share this post!" line. |
| "Additional Resources" (4 latest posts) | Template | No "Related posts" list. |

**About the excerpt:** it shows in three places: under the title on the post, as the search
meta description, and on the blog index card (trimmed to about 22 words). Write it so the
**first 22 words** make sense on their own.

---

## 3. Headings

The blog styles exactly **three heading levels**. Use them as a strict hierarchy.

| Level | Looks like | Use it for |
|---|---|---|
| `<h2>` | Large, bold, near-black | Main sections. **Each H2 becomes a link in the "On this page" table of contents.** |
| `<h3>` | Medium, deep-gold gradient text | Sub-points inside an H2 section (e.g. "Step 1: …", "Script #2: …"). |
| `<h4>` | Small, bold, UPPERCASE grey label | Rarely. A small label above a short block, like "What to say" / "What not to say". |

Rules:

- **No H1** (the title is the H1). **No H5 or H6** (unstyled).
- **Never skip a level.** An H3 must sit under an H2. An H4 must sit under an H3.
- **Keep H2s short: 2–7 words.** They double as TOC links, and long ones wrap badly there.
- **Don't bold or italicize a whole heading.** It renders fine, but it's unnecessary.
- **Don't add `id` attributes.** The page generates anchors for the TOC automatically.

---

## 4. Body formatting: the complete allowed list

Write the body as **plain HTML using only these elements**. Each top-level element goes on
its own line, with a blank line between elements.

### Paragraphs

```html
<p>One paragraph, all on a single line, however long it is.</p>
```

- **Never put a line break inside a paragraph.** WordPress turns a single line break into a
  visible `<br>`. One paragraph = one line.

### Bold, italic, links

```html
<p>The fix is a <strong>three-touch cadence</strong>, not a <em>longer</em> one. Start with our <a href="https://www.theloanatlas.com/perfect-loan-process/">Perfect Loan Process</a>.</p>
```

- `<strong>` renders bold. `<em>` renders italic.
- Links render brass-colored and underlined. Always use the full `https://...` URL.

### Lists

```html
<ul>
<li>Bulleted item. Brass bullet marker.</li>
<li>Keep items parallel in grammar.</li>
</ul>

<ol>
<li>Numbered step. Bold brass numeral.</li>
<li>Use for sequences and step-by-step processes.</li>
</ol>
```

- Each `<li>` on its own line. No nested lists.
- A list item may contain `<strong>`, `<em>`, `<a>`. A good pattern is
  `<li><strong>Label.</strong> Explanation.</li>`.

### Blockquote: a key quote or line

```html
<blockquote><p>The originators winning right now aren't working harder. They've built systems that compound.</p></blockquote>
```

- Renders indented, italic, grey, with a brass left rule.
- **Attribution lines do not display.** `<cite>` is hidden on purpose. If the quote's author
  matters, name them in the paragraph before it: "As Josh Mettle puts it:".

### Callout box: tip, warning, or key takeaway

This is the blog's only custom formatting class. Write it exactly like this:

```html
<div class="tla-callout"><p><strong>Pro tip:</strong> Send the agent update before the buyer asks. That one habit is half the referral game.</p></div>
```

- Renders as a light panel with a brass left border.
- Always start with a short bold label: `Pro tip:`, `Key takeaway:`, `Watch out:`,
  `Try this:`, `Quick math:`.
- Keep it to a single `<p>`.
- No other classes or `<div>`s exist. Don't invent any.

### Horizontal rule

```html
<hr>
```

A thin divider. Not needed between normal H2 sections.

### Scripts and word-for-word language

Show a script as a **blockquote** (one per line of dialogue). Label who's talking in a
paragraph or `<h4>` before it:

```html
<h4>What to say</h4>

<blockquote><p>"Hey Sarah, quick heads-up: your buyers' appraisal came back clean and we're on track to close Friday. Anything you need from me before then?"</p></blockquote>
```

### Code block (rare)

`<pre><code>…</code></pre>` renders as a dark navy box. Use only for something meant to be
copied exactly, like an **AI prompt** the reader should paste into ChatGPT or Claude. Inside
`<pre>`, line breaks *are* preserved, so multi-line is fine there. Escape `<` as `&lt;` and
`>` as `&gt;` inside it.

```html
<pre><code>You are my mortgage follow-up assistant. Write a 3-sentence text to a past client...</code></pre>
```

### Images and video: leave to the team member

You can't upload images, so **don't write `<img>` tags or invent image URLs.** If an image
or screenshot would help, say where in the final note ("Add a screenshot of X after the
'Step 2' H3"). The team member inserts it with the WordPress image button. Images render
full-width with rounded corners automatically, and captions are supported.

YouTube videos: tell the team member to paste the YouTube URL **on its own line** in the
editor. WordPress turns it into a responsive 16:9 embed. You may write the bare URL on its
own line in the body only if the team member gave you the exact URL.

### Do NOT use

- `style="..."` attributes, `<font>`, `<span>` with styles, color or size changes
- `<h1>`, `<h5>`, `<h6>`
- `<table>`. Tables are not styled on the blog and look broken. Use a list or H3 sections.
- `<br>` for spacing, or empty `<p></p>`s
- Custom `<div>`s or classes other than `tla-callout`
- Buttons. Use a `[tla_cta]` band instead (section 5).
- Markdown syntax (`**bold**`, `## Heading`, `- bullet`). It won't convert. Use HTML.

---

## 5. Inline CTA bands: the `[tla_cta]` shortcode

The blog has **six pre-designed promo bands** that drop into the article body. WordPress
builds the whole band (headline, pitch, button, link, image) from one short code. **Never
hand-write CTA markup, buttons, or "Click here to download" paragraphs.** Use the shortcode.

### Syntax

```
[tla_cta offer="KEY"]
```

- Always on **its own line**, with a blank line above and below. **Never inside a `<p>` tag**
  or inside a list.
- Use straight quotes `"`, not curly quotes `“ ”`. Curly quotes break the shortcode.
- Every band includes its image. There is no text-only version, so don't add any other
  options to the shortcode.
- A wrong or misspelled offer key shows **nothing** on the live page. Use only the six keys
  below, spelled exactly.

### The six offers

The copy in each band is fixed. You can't change it from the post, so match the band to what
the surrounding text is about.

| Key | Band shows (eyebrow / headline / pitch / button) | Links to | Use when the article is about… |
|---|---|---|---|
| `ai` | *(no eyebrow)* / **The AI-Empowered Originator Masterplan** / "See how the next generation of loan officers close twice the loans in half the time." / **Get the plan** | /ai-originator-masterplan/ | AI tools, automation, ChatGPT/Claude for LOs, productivity, systems, doing more with less |
| `scripts` | STOP LOSING DEALS / **5 Scripts for Dominating the Point of Sale** / "These 5 scripts will help you stay calm, ask better questions, and keep control of the conversation." / **Get the scripts** | /5-scripts-for-dominating-point-of-sale/ | What to say, objection handling, conversations with buyers or agents, pre-approval talks, scripts |
| `plp` | BUILD YOUR PERFECT LOAN PROCESS / **Create a 5-Star Client Experience Every Time** / "Download the 72-step framework behind the most consistent, referral-generating originators in the country." / **Get the system** | /perfect-loan-process/ | Client experience, communication during the loan, reviews, past-client referrals, process, closing smoothly |
| `consult` | FREE BUSINESS ASSESSMENT / **See Where Your Next 10 Loans Are Hiding** / "Tour the Loan Atlas to find out what's holding your production back and how to fix it." / **Book my call** | /consultation/ | Business planning, goals, growth, "where do I start," coaching, accountability. Strong default for the **end** of any article. |
| `join` | START YOUR TRANSFORMATION / **Join The Loan Atlas** / "Install the systems and take control of your production, your income, and your life." / **Become a member** | /join/ | Coaching, community, mastermind, the full system, posts that pitch the whole membership |
| `podcast` | THE 360 EXPERIENCE PODCAST / **Real conversations with the best in the business** / "Listen to industry experts, coaches, and change makers as they inspire you to take action to thrive in your business." / **Listen now** (play icon) | /podcast/ | Posts recapping or quoting a podcast episode, interviews with top producers |

### Placement rules

1. **One CTA per ~600–800 words.**
   Never two bands back-to-back, and never the same offer twice in one article.
2. **First band:** after the reader has gotten real value, usually right after the 2nd or 3rd
   H2 section ends. **Never before the first H2.** Never between a heading and its first
   paragraph.
3. **Match the band to the section it follows.** Put `scripts` right after a section about
   what to say, and `ai` right after a section about automation. The band should feel like
   "want the full version of what you just read?"
4. **Last band:** after the final section's closing paragraph. Only the `[tla_faq]` block
   (section 5c) and the `[tla-tim-bio]` author card (section 5b) come after it. `consult` or
   `join` is usually right here, or the single most relevant offer if it wasn't used earlier.
5. **Bridge sentence (optional, recommended):** the paragraph before a band can tee it up
   naturally, e.g. "We've put all five of these into a free download." Don't write "Click the
   button below," and don't repeat the band's headline word for word.
6. If the team member names a specific offer to promote, it goes in, placed where it fits
   best, plus at most one other.

---

## 5b. The author card: the `[tla-tim-bio]` shortcode

**Every article ends with this line,** right after the `[tla_faq]` block (section 5c), or
right after the closing `[tla_cta]` band if the article has no FAQ:

```
[tla-tim-bio]
```

It renders an "About the author" card for Tim Braheem: his photo, title, a short bio, and a
link to the faculty page. WordPress builds all of it. The shortcode takes no options, so
always write it exactly as shown, on its own line with a blank line above it. Nothing goes
after it.

---

## 5c. The FAQ block: the `[tla_faq]` shortcode

The FAQ block holds 3–5 questions and answers. It goes **after the closing `[tla_cta]` band
and before `[tla-tim-bio]`**:

```
[tla_cta offer="consult"]

[tla_faq title="Business Planning"]
[tla_faq_item q="How do I build a business plan as a loan officer?"]Start with your income goal and work backwards...[/tla_faq_item]
[tla_faq_item q="What if I don't know my lead-to-close ratio?"]Estimate it for now (10% to 20% is a reasonable placeholder)...[/tla_faq_item]
[tla_faq_item q="How many goals should be in my business plan?"]No more than three major goals for the year, and one is fine...[/tla_faq_item]
[/tla_faq]

[tla-tim-bio]
```

WordPress turns it into a dark "FAQs: Business Planning" band with numbered questions that
open on click (the first one starts open). The numbering and design are automatic.

**Rules:**

1. **`title`** is the topic, 1–4 words, Title Case. It shows as "FAQs: <title>", so don't
   write "FAQs" in it.
2. **One `[tla_faq_item]` per question, each on its own line.** No blank lines anywhere
   between `[tla_faq ...]` and `[/tla_faq]`. Put a blank line above and below the whole block.
3. **`q="..."`** is the question, ending in a question mark. Straight quotes only, and never
   a `"` or `]` inside the question.
4. **The answer** goes between `]` and `[/tla_faq_item]`, on the same line. Plain text, plus
   `<strong>`, `<em>`, and `<a>` if needed. No `<p>`, lists, or line breaks.
5. One FAQ block per article, never mid-article.

---

## 6. Complete example output

A short example showing the reply format and every formatting element in place.

> **TITLE:** The Escrow Update Habit That Wins Listing Agents
> **SLUG:** escrow-updates-listing-agents
> **EXCERPT:** Listing agents don't remember the LO with the best rate. They remember the one who kept them informed. Here's the update cadence that turns one closing into a referral pipeline.
> **CATEGORY:** Lead Generation
> **TAGS:** Agent Referrals, Communication, Pipeline, Scripts
> **FEATURED IMAGE:** A loan officer texting on a phone with a "Sold" sign blurred in the background.
> **CTAs USED:** plp, consult

```html
<p>Every listing agent has a story about the lender who went dark. The buyer's LO who didn't return a call for three days. The surprise condition on day 27. The closing that slipped a week with no warning.</p>

<p>That story is your opportunity. Agents don't send their next buyer to the LO with the sharpest rate. They send them to the one who made the last deal feel easy. Here's the update habit that makes you that LO.</p>

<h2>Why agents stop referring</h2>

<p>It's rarely the loan. It's the silence. An agent with no information has to guess, and guessing feels like risk to their seller and their commission.</p>

<blockquote><p>The agent doesn't need you to be perfect. They need to never be surprised.</p></blockquote>

<h2>The five-touch escrow cadence</h2>

<p>Send a short update at each of these moments, <strong>before anyone asks</strong>:</p>

<ol>
<li><strong>Contract received.</strong> Confirm you have it and give the target closing date.</li>
<li><strong>Appraisal ordered.</strong> Share the expected turnaround.</li>
<li><strong>Appraisal back.</strong> Value came in, or here's the plan if it didn't.</li>
<li><strong>Clear to close.</strong> The best text an agent gets all month.</li>
<li><strong>Funded.</strong> Thank them and name the next step.</li>
</ol>

<div class="tla-callout"><p><strong>Pro tip:</strong> Copy the buyer's agent on the same update. Two agents now see you as the most organized person in the deal.</p></div>

<h2>What to actually say</h2>

<h3>The appraisal-back text</h3>

<blockquote><p>"Hi Sarah, appraisal came back at value on Maple Street. We're on track for the 14th. Anything you need from me?"</p></blockquote>

<p>We built the full communication playbook, every touchpoint from application to close, into one free system.</p>

[tla_cta offer="plp"]

<h2>Your next step</h2>

<p>Pick your next three files in escrow. Put the five touches on your calendar today. By the time they close, you'll have three agents who've seen what working with you feels like.</p>

[tla_cta offer="consult"]

[tla_faq title="Agent Updates"]
[tla_faq_item q="How often should I update the agents on my files?"]At every milestone: application, appraisal, approval, clear to close, and funding. Five short updates beat one long one.[/tla_faq_item]
[tla_faq_item q="Should I text or email agent updates?"]Text for quick milestone updates, and email when you need to send documents or a written record.[/tla_faq_item]
[tla_faq_item q="Should I copy the buyer's agent?"]Yes. Two agents then see how organized you are, and the buyer's agent is your next referral source.[/tla_faq_item]
[/tla_faq]

[tla-tim-bio]
```

*Note: the example is short to save space.*

---

## 7. For team members: pasting into WordPress

1. **Posts → Add New.** Type the **TITLE** into the title field.
2. Open the code view:
   - **Block editor:** ⋮ menu (top right) → **Code editor**
     (Mac: `Cmd+Shift+Option+M` · Windows: `Ctrl+Shift+Alt+M`).
   - **Classic editor:** click the **Text** tab (not "Visual").
3. Paste the whole HTML code block. Switch back to the visual editor (**Exit code editor**).
   In the block editor the article appears as one "Classic" block. That's fine, and it
   publishes correctly. Optionally, click it and choose **Convert to blocks** to edit it in
   pieces. The `[tla_cta]`, `[tla_faq]`, and `[tla-tim-bio]` lines become Shortcode blocks;
   that's expected. Keep the whole FAQ (from `[tla_faq ...]` to `[/tla_faq]`) in one
   Shortcode block.
4. In the right sidebar, fill in:
   - **Excerpt** (under Post → Excerpt): paste the EXCERPT
   - **Categories:** tick the CATEGORY
   - **Tags:** add the TAGS
   - **Featured image:** upload it (landscape, at least 1200px wide)
   - **URL / slug** (Post → Link): paste the SLUG
5. Add any images or videos flagged in Claude's final note.
6. **Preview** before publishing. Check that:
   - the "On this page" box lists every H2
   - every CTA band renders (a missing band means a typo in the `offer` key or curly quotes)
   - the FAQ band renders with every question (a missing question usually means a `"` inside
     it or a missing `[/tla_faq_item]`)
   - no stray `<p>` or `[` characters show as text

---

## 8. Final checklist (run before you answer)

- [ ] Part A details are all filled, and the excerpt reads well in its first 22 words
- [ ] No H1, no repeated title, no byline/date/TOC/share/related-posts in the body
- [ ] H2s are 2–7 words; H3s only under H2s; nothing below H4
- [ ] Every paragraph is on a single line; blank line between every element
- [ ] Only allowed tags: `p h2 h3 h4 strong em a ul ol li blockquote hr pre code` plus
      `<div class="tla-callout">`
- [ ] No `style=`, no `<table>`, no `<img>`, no Markdown syntax
- [ ] 2–3 `[tla_cta]` bands, each on its own line, straight quotes, valid keys
      (`ai` `scripts` `plp` `consult` `join` `podcast`), none before the first H2, none
      adjacent, no repeats, last band at the very end
- [ ] `[tla_faq]` with 3–5 questions sits after the last `[tla_cta]` band and before
      `[tla-tim-bio]`; each `[tla_faq_item]` on its own line, no blank lines inside
- [ ] `[tla-tim-bio]` is the very last line
