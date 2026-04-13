f = r'c:\xampp\htdocs\beyond\brochure.html'
with open(f, encoding='utf-8') as fh:
    c = fh.read()

dh = '\u2807'  # drag handle ⠿

# ── NEW INSIDE LEFT: Wound Type Guide ──────────────────────
new_p2l = f'''  <!-- Inside Left – Wound Type Guide -->
  <div class="panel" id="panel-p2l" data-label="Wound Descriptions">
    <div class="panel-inner">
      <div class="sortable-zone" id="sz-p2l">

        <div class="block" data-block="wd-hd">
          <span class="drag-handle">{dh}</span>
          <div class="eyebrow">Know Your Condition</div>
          <h2 style="font-size:12pt;font-weight:900;color:var(--teal-dk);margin-bottom:10px;letter-spacing:.04em;" contenteditable="true">WOUND TYPE GUIDE</h2>
        </div>

        <div class="block" data-block="wd-pressure">
          <span class="drag-handle">{dh}</span>
          <div class="wound-card">
            <div class="wc-name" contenteditable="true">Pressure Ulcers</div>
            <div class="wc-desc" contenteditable="true">Skin breakdown caused by prolonged pressure, common in patients with limited mobility or those confined to bed.</div>
          </div>
        </div>

        <div class="block" data-block="wd-diabetic">
          <span class="drag-handle">{dh}</span>
          <div class="wound-card">
            <div class="wc-name" contenteditable="true">Diabetic Ulcers</div>
            <div class="wc-desc" contenteditable="true">Wounds resulting from poor circulation and nerve damage due to diabetes, typically occurring on the feet.</div>
          </div>
        </div>

        <div class="block" data-block="wd-venous">
          <span class="drag-handle">{dh}</span>
          <div class="wound-card">
            <div class="wc-name" contenteditable="true">Venous Ulcers</div>
            <div class="wc-desc" contenteditable="true">Open sores caused by blood pooling in the veins, usually appearing on the lower legs near the ankle.</div>
          </div>
        </div>

        <div class="block" data-block="wd-arterial">
          <span class="drag-handle">{dh}</span>
          <div class="wound-card">
            <div class="wc-name" contenteditable="true">Arterial Ulcers</div>
            <div class="wc-desc" contenteditable="true">Wounds from reduced blood flow to the extremities \u2014 often on the feet, toes, and outer ankles.</div>
          </div>
        </div>

        <div class="block" data-block="wd-infected">
          <span class="drag-handle">{dh}</span>
          <div class="wound-card">
            <div class="wc-name" contenteditable="true">Infected Wounds</div>
            <div class="wc-desc" contenteditable="true">Wounds where bacterial contamination impedes the natural healing process, requiring targeted treatment.</div>
          </div>
        </div>

        <div class="block" data-block="wd-chronic">
          <span class="drag-handle">{dh}</span>
          <div class="wound-card">
            <div class="wc-name" contenteditable="true">Chronic &amp; Post-Surgical Wounds</div>
            <div class="wc-desc" contenteditable="true">Wounds failing to heal within 4 weeks, or post-surgical wounds past 90 days needing continued professional care.</div>
          </div>
        </div>

        <div class="block" data-block="wd-burns">
          <span class="drag-handle">{dh}</span>
          <div class="wound-card">
            <div class="wc-name" contenteditable="true">Burns &amp; Traumatic Wounds</div>
            <div class="wc-desc" contenteditable="true">Tissue damage from heat, chemicals, or physical trauma requiring specialized wound management protocols.</div>
          </div>
        </div>

      </div>
    </div>
  </div>'''

# ── NEW INSIDE CENTER: FAQ ──────────────────────────────────
new_p2m = f'''  <!-- Inside Center – FAQ -->
  <div class="panel bg-teal-dk" id="panel-p2m" data-label="FAQ">
    <div class="panel-inner">
      <div class="sortable-zone" id="sz-p2m">

        <div class="block" data-block="faq-hd">
          <span class="drag-handle">{dh}</span>
          <div class="eyebrow" style="text-align:center;">Common Questions</div>
          <h2 style="font-size:12pt;font-weight:900;color:var(--white);text-align:center;margin-bottom:12px;letter-spacing:.04em;" contenteditable="true">FREQUENTLY ASKED QUESTIONS</h2>
        </div>

        <div class="block" data-block="faq-1">
          <span class="drag-handle">{dh}</span>
          <div class="faq-item">
            <div class="faq-q" contenteditable="true">Do I Need a Referral?</div>
            <div class="faq-a" contenteditable="true">Most insurance plans require a physician referral. We can assist you in obtaining one \u2014 just contact our office.</div>
          </div>
        </div>

        <div class="block" data-block="faq-2">
          <span class="drag-handle">{dh}</span>
          <div class="faq-item">
            <div class="faq-q" contenteditable="true">Is This Covered By Insurance?</div>
            <div class="faq-a" contenteditable="true">We accept Medicare, United Health Care PPO, and Blue Cross Blue Shield. We handle all billing on your behalf.</div>
          </div>
        </div>

        <div class="block" data-block="faq-3">
          <span class="drag-handle">{dh}</span>
          <div class="faq-item">
            <div class="faq-q" contenteditable="true">How Quickly Can You See Me?</div>
            <div class="faq-a" contenteditable="true">We aim to schedule your first home visit within 24\u201372 hours of insurance approval and referral receipt.</div>
          </div>
        </div>

        <div class="block" data-block="faq-4">
          <span class="drag-handle">{dh}</span>
          <div class="faq-item">
            <div class="faq-q" contenteditable="true">What Safety Protocols Do You Follow?</div>
            <div class="faq-a" contenteditable="true">Our clinicians follow CDC guidelines and use proper PPE during all home visits to keep you and your family safe.</div>
          </div>
        </div>

        <div class="block" data-block="faq-5">
          <span class="drag-handle">{dh}</span>
          <div class="faq-item">
            <div class="faq-q" contenteditable="true">Do You Serve Nursing Facilities?</div>
            <div class="faq-a" contenteditable="true">Yes \u2014 we provide wound care at homes, nursing homes, and assisted living facilities across our service counties.</div>
          </div>
        </div>

        <div class="block mt-sm" data-block="faq-cta">
          <span class="drag-handle">{dh}</span>
          <p style="color:rgba(255,255,255,.75);font-size:7.5pt;text-align:center;line-height:1.6;" contenteditable="true">Have more questions? Call us anytime.<br><strong style="color:var(--accent);font-size:9pt;">847.873.8693</strong></p>
        </div>

      </div>
    </div>
  </div>'''

# ── NEW INSIDE RIGHT: Our Team ──────────────────────────────
new_p2r = f'''  <!-- Inside Right – Our Wound Care Team -->
  <div class="panel" id="panel-p2r" data-label="Our Team">
    <div class="panel-inner">
      <div class="sortable-zone" id="sz-p2r">

        <div class="block" data-block="team-hd">
          <span class="drag-handle">{dh}</span>
          <div class="eyebrow">Meet the Experts</div>
          <h2 style="font-size:12pt;font-weight:900;color:var(--teal-dk);margin-bottom:10px;letter-spacing:.04em;" contenteditable="true">OUR WOUND CARE TEAM</h2>
        </div>

        <div class="block" data-block="team-intro">
          <span class="drag-handle">{dh}</span>
          <div class="mission-box" contenteditable="true">Our board-certified wound care specialists bring decades of combined clinical experience \u2014 delivering expert, compassionate care wherever you call home.</div>
        </div>

        <div class="block mt-sm" data-block="team-1">
          <span class="drag-handle">{dh}</span>
          <div class="team-card">
            <div class="tc-avatar">NP</div>
            <div>
              <div class="tc-name" contenteditable="true">Wound Care Nurse Practitioner</div>
              <div class="tc-role" contenteditable="true">Advanced wound assessment, debridement, and treatment planning for complex wound cases.</div>
            </div>
          </div>
        </div>

        <div class="block" data-block="team-2">
          <span class="drag-handle">{dh}</span>
          <div class="team-card">
            <div class="tc-avatar">RN</div>
            <div>
              <div class="tc-name" contenteditable="true">Registered Wound Care Nurse</div>
              <div class="tc-role" contenteditable="true">Skilled in dressing changes, wound monitoring, infection control, and patient education.</div>
            </div>
          </div>
        </div>

        <div class="block" data-block="team-3">
          <span class="drag-handle">{dh}</span>
          <div class="team-card">
            <div class="tc-avatar">CC</div>
            <div>
              <div class="tc-name" contenteditable="true">Care Coordinator</div>
              <div class="tc-role" contenteditable="true">Manages scheduling, physician communication, and ensures seamless continuity of your care plan.</div>
            </div>
          </div>
        </div>

        <div class="block" data-block="team-4">
          <span class="drag-handle">{dh}</span>
          <div class="team-card">
            <div class="tc-avatar">BI</div>
            <div>
              <div class="tc-name" contenteditable="true">Billing &amp; Insurance Specialist</div>
              <div class="tc-role" contenteditable="true">Handles all insurance verification, authorization, and claims so you can focus on healing.</div>
            </div>
          </div>
        </div>

        <div class="block mt-sm" data-block="team-cert">
          <span class="drag-handle">{dh}</span>
          <div style="background:var(--teal-lt);border-radius:6px;padding:10px 12px;text-align:center;">
            <div class="eyebrow" style="margin-bottom:5px;">Certifications &amp; Standards</div>
            <p style="font-size:8pt;color:var(--teal-dk);line-height:1.65;" contenteditable="true">All clinicians are licensed in Illinois and follow <strong>AAWC</strong> &amp; <strong>CDC</strong> wound care standards. Fully insured &amp; background-checked.</p>
          </div>
        </div>

        <div class="block mt-sm" data-block="team-cta">
          <span class="drag-handle">{dh}</span>
          <div class="cta-box">
            <div class="cta-title" contenteditable="true">&#128222; Contact Our Team</div>
            <div class="cta-phone" contenteditable="true">847.873.8693</div>
            <div class="cta-sub" contenteditable="true">support@beyondwoundcare.com</div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div><!-- /page2 -->'''

# ── FIND & REPLACE page2 region ────────────────────────────
import re

# Match everything from PAGE 2 comment to /page2 (inclusive), excluding page3
p2_pattern = re.compile(
    r'(<!-- [=\u2550]+ PAGE 2 [=\u2550]+.*?-->)\s*\n<div class="page" id="page2">.*?</div><!-- /page2 -->',
    re.DOTALL
)

page2_label = '<span class="page-label">PAGE 2 &ndash; INSIDE &nbsp;(fully open view)</span>'

new_page2_block = f'''<!-- \u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550
     PAGE 2 \u2013 INSIDE
\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550 -->
<div class="page" id="page2">
  <span class="page-label">PAGE 2 \u2013 INSIDE &nbsp;(Wound Guide &bull; FAQ &bull; Team)</span>

{new_p2l}

{new_p2m}

{new_p2r}'''

# Use simpler landmark-based replacement
# Find the open of page2 comment block to /page2
start_marker = '<!-- \u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\n     PAGE 2 \u2013 INSIDE\n\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550 -->'
end_marker   = '</div><!-- /page2 -->'

si = c.find(start_marker)
ei = c.find(end_marker, si) + len(end_marker)

if si == -1 or ei == len(end_marker) - 1:
    print('ERROR: page2 markers not found')
else:
    c = c[:si] + new_page2_block + c[ei:]
    print(f'  \u2714 Page 2 replaced (chars {si}\u2013{ei})')

# ── REMOVE PAGE 3 ───────────────────────────────────────────
p3_start = c.find('\n<!-- \u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\u2550\n     PAGE 3')
p3_end   = c.find('</div><!-- /page3 -->') 
if p3_start != -1 and p3_end != -1:
    p3_end += len('</div><!-- /page3 -->')
    c = c[:p3_start] + c[p3_end:]
    print('  \u2714 Page 3 removed')
else:
    print(f'  \u2718 Page 3 not found (start={p3_start}, end={p3_end})')

# ── FIX JS SNAPSHOT: revert to 2-page only ─────────────────
old_snap = "  const p3el = document.getElementById('page3');\n  const s = document.getElementById('page1').innerHTML + '||' + document.getElementById('page2').innerHTML + '||' + (p3el ? p3el.innerHTML : '');"
new_snap = "  const s = document.getElementById('page1').innerHTML + '||' + document.getElementById('page2').innerHTML;"
if old_snap in c:
    c = c.replace(old_snap, new_snap, 1)
    print('  \u2714 Snapshot reverted to 2-page')

old_restore = "  const [p1,p2,p3] = s.split('||');\n  document.getElementById('page1').innerHTML = p1;\n  document.getElementById('page2').innerHTML = p2;\n  const p3el = document.getElementById('page3'); if (p3el && p3 !== undefined) p3el.innerHTML = p3;"
new_restore = "  const [p1,p2] = s.split('||');\n  document.getElementById('page1').innerHTML = p1;\n  document.getElementById('page2').innerHTML = p2;"
if old_restore in c:
    c = c.replace(old_restore, new_restore, 1)
    print('  \u2714 Restore reverted to 2-page')

with open(f, 'w', encoding='utf-8') as fh:
    fh.write(c)
print(f'\nDone. File length: {len(c)}')
