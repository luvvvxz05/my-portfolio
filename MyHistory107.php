<?php
// ============================================================
//  Portfolio — ณภัทร วัฒนนภาเกษม (Thee)
//  แก้ไขข้อมูลได้ที่ส่วนนี้ แล้วหน้าเว็บจะอัปเดตตามอัตโนมัติ
// ============================================================

$profile = [
    'name_th'  => 'นาย ณภัทร วัฒนนภาเกษม', 
    'name_en'  => 'Mr. Napat Wattananapakasem',
    'nick_th'  => 'ธีร์สุดหล่อค้าบ',
    'nick_en'  => 'Thee',
    'age'      => 21,
    'faculty'  => 'เทคโนโลยีดิจิทัล',
    'major'    => 'วิทยาการคอมพิวเตอร์ (CS)',
    // หารูป profile (jpg/jpeg/png/webp/gif) ในโฟลเดอร์เดียวกับไฟล์นี้ หรือในโฟลเดอร์ images/
    'photo'    => (function () {
        $found = glob(__DIR__ . '/{profile,images/profile}.{jpg,jpeg,png,webp,gif,JPG,JPEG,PNG}', GLOB_BRACE);
        return $found ? str_replace(__DIR__ . '/', '', $found[0]) : 'profile.jpg';
    })(),
];

$loves = [
    ['icon' => 'book',  'text' => 'ชอบอ่านหนังสือนิยาย'],
    ['icon' => 'music', 'text' => 'ชอบฟังเพลง'],
    ['icon' => 'cards', 'text' => 'ชอบเล่นการ์ดเกม'],
];

$skills = [
    ['name' => 'HTML/CSS',         'icon' => 'web'],
    ['name' => 'PHP',              'icon' => 'php'],
    ['name' => 'Java',             'icon' => 'java'],
    ['name' => 'Microsoft Office', 'icon' => 'office'],
];

$education = [
    'logo'       => 'edu_logo.jpg',
    'name'       => 'นาย ณภัทร วัฒนนภาเกษม',
    'school'     => 'วิทยาลัยเทคนิคลพบุรี',
    'level'      => 'ปวส.',
    'department' => 'เทคโนโลยีคอมพิวเตอร์',
    'major'      => 'เทคโนโลยีคอมพิวเตอร์',
];

$works = [
    [
        'title' => 'อุปกรณ์แจ้งเตือนของเหลวในถุงปัสสาวะของผู้ป่วยติดเตียง (IoT)',
        'org'   => 'โครงงาน/ชิ้นงานวิจัย: อุปกรณ์ IoT วัดปริมาณของเหลวในถุงปัสสาวะ ใช้บอร์ด ESP32 ร่วมกับ Load Cell และโมดูล HX711 แสดงปริมาณเป็น ml บนจอ OLED',
        'date'  => 'Project / Research',
        'tag'   => 'IoT',
        'fit'   => 'cover',
        'imgs'  => [
            ['iot_urine_1.jpg', 'ชิ้นงานที่ประกอบเสร็จ แสดงปริมาณของเหลวบนจอ OLED'],
            ['iot_urine_2.jpg', 'ภายในกล่องอุปกรณ์ ESP32 และจอ OLED'],
            ['iot_urine_3.jpg', 'ชิ้นส่วนอุปกรณ์ ESP32, Load Cell, HX711'],
        ],
    ],
    [
        'title' => 'ฝึกงาน ฝ่าย IT Service แผนก PC Support',
        'org'   => 'บริษัท เอ็นเอ็มบี-มินีแบ ไทย จำกัด (กลุ่มบริษัท MinebeaMitsumi ประเทศไทย)',
        'date'  => '14 ตุลาคม 2568 – 6 กุมภาพันธ์ 2569',
        'tag'   => 'Internship',
        'fit'   => 'contain',
        'imgs'  => [['cert_company.jpg', 'หนังสือรับรองการฝึกงาน เลขที่ 36/2569']],
    ],
    [
        'title' => 'ผ่านการฝึกงาน สาขาวิชาเทคโนโลยีคอมพิวเตอร์',
        'org'   => 'วิทยาลัยเทคนิคลพบุรี สำนักงานคณะกรรมการการอาชีวศึกษา',
        'date'  => '6 กุมภาพันธ์ 2569',
        'tag'   => 'Certificate',
        'fit'   => 'contain',
        'imgs'  => [['cert_college.jpg', 'หนังสือรับรองการฝึกงาน จากวิทยาลัย']],
    ],
    [
        'title' => 'บอร์ด Arduino เขียนโค้ดด้วยโปรแกรม Arduino IDE',
        'org'   => 'เขียนโค้ดสั่งงานบอร์ดไมโครคอนโทรลเลอร์ ESP32 พร้อมจอ OLED ผ่านโปรแกรม Arduino IDE',
        'date'  => 'Arduino IDE เวอร์ชัน 1.8.10',
        'tag'   => 'Arduino',
        'fit'   => 'cover',
        'imgs'  => [
            ['arduino_board1.jpg', 'บอร์ด Arduino (ESP32) แสดงผลบนจอ OLED'],
            ['arduino_board2.jpg', 'บอร์ด Arduino (ESP32) เชื่อมต่อ WiFi สำเร็จ'],
        ],
    ],
];

$instagram = 'luvvv.xz';

// ไอคอน SVG (ฝังในไฟล์ ไม่ต้องใช้อินเทอร์เน็ต)
$icons = [
    'book'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v16H6.5A2.5 2.5 0 0 0 4 21.5z"/><path d="M4 5.5v16"/><path d="M9 8h7"/></svg>',
    'music' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15v-3a8 8 0 0 1 16 0v3"/><rect x="3" y="14" width="4.5" height="7" rx="1.5"/><rect x="16.5" y="14" width="4.5" height="7" rx="1.5"/></svg>',
    'cards' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="6" width="11" height="15" rx="2" transform="rotate(-10 8.5 13.5)"/><rect x="10" y="3" width="11" height="15" rx="2" transform="rotate(8 15.5 10.5)"/></svg>',
    'web'   => '<svg viewBox="0 0 64 64"><rect x="4" y="4" width="56" height="56" rx="10" fill="#161b22" stroke="#30363d"/><path d="M24 22 14 32l10 10" fill="none" stroke="#e8743b" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/><path d="M40 22l10 10-10 10" fill="none" stroke="#3b9be8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/><path d="M35 18 29 46" stroke="#e6edf3" stroke-width="4" stroke-linecap="round"/></svg>',
    'php'   => '<svg viewBox="0 0 64 64"><rect x="4" y="4" width="56" height="56" rx="10" fill="#161b22" stroke="#30363d"/><ellipse cx="32" cy="32" rx="25" ry="14" fill="#7a86b8"/><text x="32" y="38" text-anchor="middle" font-family="Arial,sans-serif" font-weight="700" font-size="17" fill="#0d1117">php</text></svg>',
    'java'  => '<svg viewBox="0 0 64 64"><rect x="4" y="4" width="56" height="56" rx="10" fill="#161b22" stroke="#30363d"/><path d="M20 30h22v10a9 9 0 0 1-9 9h-4a9 9 0 0 1-9-9z" fill="#e8743b"/><path d="M42 33h3a4 4 0 0 1 0 8h-3" fill="none" stroke="#e8743b" stroke-width="3"/><path d="M26 14c-3 4 3 5 0 9M33 12c-3 4 3 6 0 11" fill="none" stroke="#3b9be8" stroke-width="3" stroke-linecap="round"/><path d="M18 53h28" stroke="#3b9be8" stroke-width="3" stroke-linecap="round"/></svg>',
    'office'=> '<svg viewBox="0 0 64 64"><rect x="4" y="4" width="56" height="56" rx="10" fill="#161b22" stroke="#30363d"/><rect x="12" y="12" width="18" height="18" rx="3" fill="#2b7cd3"/><rect x="34" y="12" width="18" height="18" rx="3" fill="#21a366"/><rect x="12" y="34" width="18" height="18" rx="3" fill="#d35230"/><text x="21" y="26" text-anchor="middle" font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#fff">W</text><text x="43" y="26" text-anchor="middle" font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#fff">X</text><text x="21" y="48" text-anchor="middle" font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#fff">P</text><rect x="34" y="34" width="18" height="18" rx="3" fill="#6e40c9"/><text x="43" y="48" text-anchor="middle" font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#fff">O</text></svg>',
    'ig'    => '<svg viewBox="0 0 64 64"><defs><linearGradient id="ig" x1="0" y1="1" x2="1" y2="0"><stop offset="0" stop-color="#feda75"/><stop offset=".35" stop-color="#fa7e1e"/><stop offset=".65" stop-color="#d62976"/><stop offset="1" stop-color="#4f5bd5"/></linearGradient></defs><rect x="6" y="6" width="52" height="52" rx="15" fill="url(#ig)"/><rect x="16" y="16" width="32" height="32" rx="10" fill="none" stroke="#fff" stroke-width="4"/><circle cx="32" cy="32" r="8" fill="none" stroke="#fff" stroke-width="4"/><circle cx="43" cy="21" r="2.6" fill="#fff"/></svg>',
];

function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($profile['nick_en']) ?> — Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;800&family=Noto+Sans+Thai:wght@400;500;700&display=swap" rel="stylesheet">
<style>
  :root {
    --bg: #05070a;
    --panel: #0d1117;
    --line: #21262d;
    --text: #e6edf3;
    --muted: #8b949e;
    --green: #39ff88;
    --mono: "JetBrains Mono", "Noto Sans Thai", ui-monospace, monospace;
    --sans: "Noto Sans Thai", system-ui, sans-serif;
  }
  * { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body {
    background: var(--bg);
    color: var(--text);
    font-family: var(--sans);
    line-height: 1.7;
    background-image: radial-gradient(circle at 1px 1px, #11161d 1px, transparent 0);
    background-size: 28px 28px;
  }
  a { color: inherit; text-decoration: none; }
  a:focus-visible { outline: 2px solid var(--green); outline-offset: 3px; }
  .wrap { width: min(1080px, 100% - 40px); margin-inline: auto; }

  /* nav */
  header { border-bottom: 1px solid var(--line); background: rgba(5,7,10,.85); position: sticky; top: 0; z-index: 5; backdrop-filter: blur(8px); }
  nav { display: flex; justify-content: space-between; align-items: center; height: 56px; font-family: var(--mono); font-size: .9rem; }
  nav .logo { color: var(--green); font-weight: 600; }
  nav ul { display: flex; gap: 22px; list-style: none; }
  nav ul a { color: var(--muted); }
  nav ul a:hover { color: var(--green); }

  /* hero */
  .hero { display: grid; grid-template-columns: 1.15fr .85fr; gap: 48px; align-items: center; padding: 72px 0 88px; }
  .term { background: var(--panel); border: 1px solid var(--line); border-radius: 10px; overflow: hidden; }
  .term-bar { display: flex; align-items: center; gap: 7px; padding: 11px 14px; border-bottom: 1px solid var(--line); font-family: var(--mono); font-size: .78rem; color: var(--muted); }
  .term-bar i { width: 11px; height: 11px; border-radius: 50%; background: #30363d; display: block; }
  .term-bar span { margin-left: 8px; }
  .term-body { padding: 26px 26px 30px; font-family: var(--mono); }
  .prompt { color: var(--green); font-size: .95rem; }
  .prompt b { color: var(--muted); font-weight: 400; }
  .hello { color: var(--muted); font-size: .95rem; margin-top: 18px; }
  h1 { font-family: var(--sans); font-size: clamp(1.9rem, 4.6vw, 3rem); line-height: 1.2; font-weight: 700; margin: 6px 0 4px; letter-spacing: -.01em; }
  .en { font-size: 1.05rem; color: var(--green); }
  .welcome { margin-top: 22px; font-family: var(--sans); color: var(--text); max-width: 34ch; }
  .cursor { display: inline-block; width: 10px; height: 1.1em; background: var(--green); vertical-align: -3px; margin-left: 4px; animation: blink 1.1s steps(1) infinite; }
  @keyframes blink { 50% { opacity: 0; } }
  .btns { display: flex; gap: 12px; margin-top: 28px; flex-wrap: wrap; }
  .btn { font-family: var(--mono); font-size: .85rem; padding: 9px 16px; border: 1px solid var(--line); border-radius: 6px; color: var(--text); }
  .btn.primary { background: var(--green); color: #04110a; border-color: var(--green); font-weight: 600; }
  .btn:hover { border-color: var(--green); }

  .photo { position: relative; border: 1px solid var(--line); border-radius: 10px; overflow: hidden; background: var(--panel); }
  .photo img { display: block; width: 100%; aspect-ratio: 4 / 5; object-fit: cover; object-position: 50% 12%; filter: contrast(1.04); }
  .photo figcaption { font-family: var(--mono); font-size: .78rem; color: var(--muted); padding: 10px 14px; border-top: 1px solid var(--line); }
  .photo figcaption em { color: var(--green); font-style: normal; }

  /* sections */
  section { padding: 64px 0; border-top: 1px solid var(--line); }
  h2 { font-family: var(--mono); font-size: 1.5rem; font-weight: 800; margin-bottom: 28px; }
  h2 span { color: var(--green); }

  .kv { background: var(--panel); border: 1px solid var(--line); border-radius: 10px; padding: 8px 24px; max-width: 720px; }
  .kv div { display: grid; grid-template-columns: 190px 1fr; gap: 16px; padding: 13px 0; border-bottom: 1px dashed var(--line); }
  .kv div:last-child { border-bottom: 0; }
  .kv dt { font-family: var(--mono); color: var(--green); font-size: .9rem; }
  .kv dd { color: var(--text); }

  .edu { display: grid; grid-template-columns: 260px 1fr; background: var(--panel); border: 1px solid var(--line); border-radius: 10px; overflow: hidden; max-width: 820px; }
  .edu img { display: block; width: 100%; height: 100%; min-height: 260px; object-fit: cover; border-right: 1px solid var(--line); }
  .edu .kv { border: 0; border-radius: 0; max-width: none; background: transparent; align-self: center; }

  .loves { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
  .love { background: var(--panel); border: 1px solid var(--line); border-radius: 10px; padding: 26px 22px; }
  .love svg { width: 34px; height: 34px; color: var(--green); margin-bottom: 14px; }

  .skills { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
  .skill { background: var(--panel); border: 1px solid var(--line); border-radius: 10px; padding: 24px 16px 20px; text-align: center; }
  .skill svg { width: 76px; height: 76px; display: block; margin: 0 auto 14px; }
  .skill p { font-family: var(--mono); font-size: .9rem; }

  .works { display: grid; gap: 22px; }
  .work { display: grid; grid-template-columns: 1fr 1.1fr; gap: 0; background: var(--panel); border: 1px solid var(--line); border-radius: 10px; overflow: hidden; }
  .work-info { padding: 28px 28px 26px; display: flex; flex-direction: column; gap: 6px; }
  .tag { align-self: flex-start; font-family: var(--mono); font-size: .75rem; color: #04110a; background: var(--green); padding: 2px 10px; border-radius: 4px; font-weight: 600; margin-bottom: 8px; }
  .work-info h3 { font-size: 1.2rem; line-height: 1.4; }
  .work-info .org { color: var(--muted); }
  .work-info .date { font-family: var(--mono); font-size: .85rem; color: var(--green); margin-top: 8px; }
  .work.wide { grid-template-columns: 1fr; }
  .work.wide .imgs { border-left: 0; border-top: 1px solid var(--line); }
  .work.wide .imgs a.cert img { height: 400px; }
  .imgs { display: grid; grid-template-columns: repeat(var(--n, 1), 1fr); border-left: 1px solid var(--line); background: #0a0d12; }
  .imgs a.cert { display: flex; flex-direction: column; min-width: 0; }
  .imgs a.cert + a.cert { border-left: 1px solid var(--line); }
  .imgs a.cert img { display: block; width: 100%; height: 340px; background: #0a0d12; }
  .imgs.contain a.cert img { object-fit: contain; }
  .imgs.cover a.cert img { object-fit: cover; }
  .imgs a.cert span { display: block; font-family: var(--mono); font-size: .75rem; color: var(--muted); background: var(--panel); padding: 8px 14px; border-top: 1px solid var(--line); margin-top: auto; }
  .imgs a.cert:hover span { color: var(--green); }

  .contact a.ig { display: inline-flex; align-items: center; gap: 16px; background: var(--panel); border: 1px solid var(--line); border-radius: 10px; padding: 16px 24px 16px 18px; }
  .contact a.ig:hover { border-color: var(--green); }
  .contact svg { width: 48px; height: 48px; }
  .contact small { display: block; color: var(--muted); font-family: var(--mono); font-size: .78rem; }
  .contact strong { font-family: var(--mono); font-size: 1.1rem; }

  footer { border-top: 1px solid var(--line); padding: 26px 0; color: var(--muted); font-family: var(--mono); font-size: .8rem; }

  @media (max-width: 820px) {
    .hero { grid-template-columns: 1fr; padding: 40px 0 56px; gap: 32px; }
    .photo { order: -1; max-width: 420px; }
    .loves { grid-template-columns: 1fr; }
    .edu { grid-template-columns: 1fr; }
    .edu img { height: 240px; border-right: 0; border-bottom: 1px solid var(--line); }
    .skills { grid-template-columns: repeat(2, 1fr); }
    .work { grid-template-columns: 1fr; }
    .imgs { border-left: 0; border-top: 1px solid var(--line); }
    .work.wide .imgs, .imgs { grid-template-columns: 1fr; }
    .imgs a.cert + a.cert { border-left: 0; border-top: 1px solid var(--line); }
    .imgs a.cert img, .work.wide .imgs a.cert img { height: 300px; }
    .kv div { grid-template-columns: 1fr; gap: 0; }
    nav ul { gap: 14px; font-size: .8rem; }
  }
  @media (prefers-reduced-motion: reduce) { .cursor { animation: none; } html { scroll-behavior: auto; } }
</style>
</head>
<body>

<header>
  <nav class="wrap">
    <a class="logo" href="#top">~/<?= strtolower(e($profile['nick_en'])) ?></a>
    <ul>
      <li><a href="#about">about</a></li>
      <li><a href="#education">education</a></li>
      <li><a href="#loves">loves</a></li>
      <li><a href="#skills">skills</a></li>
      <li><a href="#works">works</a></li>
      <li><a href="#contact">contact</a></li>
    </ul>
  </nav>
</header>

<main id="top">
  <div class="wrap hero">
    <div class="term">
      <div class="term-bar"><i></i><i></i><i></i><span>thee@portfolio: ~</span></div>
      <div class="term-body">
        <p class="prompt">$ <b>whoami</b></p>
        <p class="hello">สวัสดีครับผม ชื่อ</p>
        <h1><?= e($profile['name_th']) ?></h1>
        <p class="en"><?= e($profile['name_en']) ?></p>
        <p class="welcome">ยินดีต้อนรับเข้าสู่เว็บไซต์ Portfolio ของผม<span class="cursor" aria-hidden="true"></span></p>
        <div class="btns">
          <a class="btn primary" href="#about">ดูประวัติของผม</a>
          <a class="btn" href="#contact">ช่องทางติดต่อ</a>
        </div>
      </div>
    </div>

    <figure class="photo">
      <img src="<?= e($profile['photo']) ?>" alt="รูปของ <?= e($profile['name_th']) ?>">
      <figcaption><em>$</em> cat profile.jpg — <?= e($profile['nick_en']) ?></figcaption>
    </figure>
  </div>

  <section id="about">
    <div class="wrap">
      <h2><span>&gt;</span> ABOUT ME</h2>
      <dl class="kv">
        <div><dt>ชื่อ</dt><dd><?= e($profile['name_th']) ?></dd></div>
        <div><dt>ชื่อภาษาอังกฤษ</dt><dd><?= e($profile['name_en']) ?></dd></div>
        <div><dt>ชื่อเล่น</dt><dd><?= e($profile['nick_th']) ?></dd></div>
        <div><dt>ชื่อเล่นภาษาอังกฤษ</dt><dd><?= e($profile['nick_en']) ?></dd></div>
        <div><dt>อายุ</dt><dd><?= (int)$profile['age'] ?> ปี</dd></div>
        <div><dt>สาขา</dt><dd><?= e($profile['faculty']) ?></dd></div>
        <div><dt>วิชาเอก</dt><dd><?= e($profile['major']) ?></dd></div>
      </dl>
    </div>
  </section>

  <section id="education">
    <div class="wrap">
      <h2><span>&gt;</span> ประวัติการศึกษา</h2>
      <div class="edu">
        <img src="<?= e($education['logo']) ?>" alt="โลโก้แผนก<?= e($education['department']) ?>">
        <dl class="kv">
          <div><dt>ชื่อ</dt><dd><?= e($education['name']) ?></dd></div>
          <div><dt>สถานศึกษา</dt><dd><?= e($education['school']) ?></dd></div>
          <div><dt>ระดับชั้น</dt><dd><?= e($education['level']) ?></dd></div>
          <div><dt>แผนก</dt><dd><?= e($education['department']) ?></dd></div>
          <div><dt>สาขาวิชา</dt><dd><?= e($education['major']) ?></dd></div>
        </dl>
      </div>
    </div>
  </section>

  <section id="loves">
    <div class="wrap">
      <h2><span>&gt;</span> Things I love</h2>
      <div class="loves">
        <?php foreach ($loves as $love): ?>
          <div class="love">
            <?= $icons[$love['icon']] ?>
            <p><?= e($love['text']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="skills">
    <div class="wrap">
      <h2><span>&gt;</span> ทักษะและความสามารถ</h2>
      <div class="skills">
        <?php foreach ($skills as $skill): ?>
          <div class="skill">
            <?= $icons[$skill['icon']] ?>
            <p><?= e($skill['name']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="works">
    <div class="wrap">
      <h2><span>&gt;</span> ผลงานและกิจกรรม</h2>
      <div class="works">
        <?php foreach ($works as $w): ?>
          <article class="work<?= count($w['imgs']) > 2 ? ' wide' : '' ?>">
            <div class="work-info">
              <span class="tag"><?= e($w['tag']) ?></span>
              <h3><?= e($w['title']) ?></h3>
              <p class="org"><?= e($w['org']) ?></p>
              <p class="date"><?= e($w['date']) ?></p>
            </div>
            <div class="imgs <?= e($w['fit']) ?>" style="--n: <?= count($w['imgs']) ?>">
              <?php foreach ($w['imgs'] as [$src, $cap]): ?>
                <a class="cert" href="<?= e($src) ?>" target="_blank" rel="noopener">
                  <img src="<?= e($src) ?>" alt="<?= e($cap) ?>">
                  <span>$ open <?= e($cap) ?></span>
                </a>
              <?php endforeach; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="wrap">
      <h2><span>&gt;</span> ช่องทางติดต่อ</h2>
      <a class="ig" href="https://www.instagram.com/<?= e($instagram) ?>/" target="_blank" rel="noopener">
        <?= $icons['ig'] ?>
        <span><small>Instagram</small><strong>@<?= e($instagram) ?></strong></span>
      </a>
    </div>
  </section>
</main>

<footer>
  <div class="wrap">&copy; <?= date('Y') ?> <?= e($profile['name_en']) ?></div>
</footer>

</body>
</html>
