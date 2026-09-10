# Nova Country Practice — WordPress theme

A custom block theme. No page builder, no paid plugins, no external font or
script requests (the fonts ship inside the theme).

## Installing
WordPress admin → Appearance → Themes → Add New → Upload Theme → choose the zip → Activate.

## Where things live
- **Settings → Practice Details** — phone, address, email, opening hours, after-hours
  arrangements and the AutoMed links. Set once, changes everywhere.
- **Pages** — normal WordPress pages, edited in the block editor.
- **Appearance → Editor** — header, footer, colours and fonts.

## Placeholders
Anything the practice has not supplied yet shows on the page as a dotted orange
chip, e.g. "⌁ Phone to be supplied". That is deliberate. A medical site must not
display a guessed phone number, fee or after-hours arrangement. Fill the value in
and the chip disappears on its own.

## Pages created by the build
Home · About · Services · Fees & Billing · New Patients · Patient Information ·
Scripts & Referrals · Contact

## Verified
Built and run against WordPress 7.1 on PHP 8.3. All eight pages return 200, the
404 template works, there is no horizontal overflow at 1280px or 390px, and the
page makes zero requests to any external host.
