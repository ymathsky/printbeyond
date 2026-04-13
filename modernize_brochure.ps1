param()
$f = 'c:\xampp\htdocs\beyond\brochure.html'
$c = [System.IO.File]::ReadAllText($f, [System.Text.Encoding]::UTF8)
$dh = [char]0x2807  # drag handle braille ⠿

# ══════════════════════════════════════════════════════════
# HELPER: Replace with logging
# ══════════════════════════════════════════════════════════
function Rep([string]$old, [string]$new, [string]$label) {
    if ($script:c.Contains($old)) {
        $script:c = $script:c.Replace($old, $new)
        Write-Host "  ✔ $label"
    } else {
        Write-Host "  ✘ NOT FOUND: $label"
    }
}

# ══════════════════════════════════════════════════════════
# 1. BACK COVER (p1l) – Insurance list upgrade
# ══════════════════════════════════════════════════════════
Rep `
'          <ul style="list-style:none;padding:0;margin:0 0 16px;">
            <li style="color:var(--white);font-size:9.5pt;padding:4px 0;" contenteditable="true">• Medicare Only</li>
          </ul>' `
'          <ul class="ins-list" style="margin-bottom:12px;">
            <li contenteditable="true">Medicare</li>
            <li contenteditable="true">United Health Care &ndash; PPO</li>
            <li contenteditable="true">Blue Cross Blue Shield</li>
          </ul>' `
"P1L – ins-list upgrade"

# Fix testimonial.png -> choose.jpg + styled
Rep `
'          <img src="https://beyondwoundcare.com/assets/img/gallery/testimonial.png" alt="Insurance" style="width:100%;height:110px;object-fit:cover;border-radius:6px;display:block;margin-bottom:14px;">' `
'          <img src="https://beyondwoundcare.com/choose.jpg" alt="Care" style="width:100%;height:85px;object-fit:cover;object-position:center top;border-radius:7px;display:block;margin-bottom:12px;box-shadow:0 3px 10px rgba(0,0,0,.28);">' `
"P1L – ins-img upgrade"

# Add eyebrow + clean heading above ins-hd h2
Rep `
'          <h2 style="font-size:13pt;font-weight:900;color:var(--white);text-decoration:underline;text-align:center;margin-bottom:14px;letter-spacing:.03em;" contenteditable="true">INSURANCE WE ACCEPT</h2>' `
'          <div class="eyebrow" style="text-align:center;">We Work With</div>
          <h2 style="font-size:12pt;font-weight:900;color:var(--white);text-align:center;margin-bottom:12px;letter-spacing:.04em;" contenteditable="true">INSURANCE WE ACCEPT</h2>' `
"P1L – heading eyebrow"

# Fix availability text + add How It Works steps (insert before ins-avail)
Rep `
'        <div class="block" data-block="ins-avail">
          <span class="drag-handle">⠿</span>
          <p style="color:var(--white);font-size:8.5pt;line-height:1.55;margin-bottom:10px;" contenteditable="true">Beyond Wound Care is available for you at home, nursing homes/facilities. Call us now at <strong>847.873.8693</strong> for more information.</p>
        </div>

        <div class="block" data-block="ins-referral">
          <span class="drag-handle">⠿</span>
          <p style="color:rgba(255,255,255,.85);font-size:8pt;" contenteditable="true">Referrals: <strong style="color:var(--white);">Support@beyondwoundcare.com</strong></p>
        </div>' `
'        <div class="block" data-block="ins-process-hd">
          <span class="drag-handle">⠿</span>
          <div class="section-title" contenteditable="true">How It Works</div>
        </div>

        <div class="block" data-block="ins-step1">
          <span class="drag-handle">⠿</span>
          <div class="step-card-dk">
            <div class="step-num-dk">1</div>
            <div><strong contenteditable="true">Doctor Referral</strong><br>
            <span contenteditable="true">Physician sends referral &amp; wound notes.</span></div>
          </div>
        </div>

        <div class="block" data-block="ins-step2">
          <span class="drag-handle">⠿</span>
          <div class="step-card-dk">
            <div class="step-num-dk">2</div>
            <div><strong contenteditable="true">Insurance Verified</strong><br>
            <span contenteditable="true">We verify coverage, handle all billing.</span></div>
          </div>
        </div>

        <div class="block" data-block="ins-step3">
          <span class="drag-handle">⠿</span>
          <div class="step-card-dk">
            <div class="step-num-dk">3</div>
            <div><strong contenteditable="true">Care Begins at Home</strong><br>
            <span contenteditable="true">Specialist visits within days of approval.</span></div>
          </div>
        </div>

        <div class="block mt-sm" data-block="ins-avail">
          <span class="drag-handle">⠿</span>
          <p style="color:rgba(255,255,255,.9);font-size:8pt;line-height:1.55;text-align:center;" contenteditable="true">Home &amp; facility visits available.<br><strong style="color:var(--accent);">&#9990; 847.873.8693</strong></p>
        </div>

        <div class="block" data-block="ins-referral">
          <span class="drag-handle">⠿</span>
          <p style="color:rgba(255,255,255,.65);font-size:7.5pt;text-align:center;" contenteditable="true">Referrals: <strong style="color:var(--white);">support@beyondwoundcare.com</strong></p>
        </div>' `
"P1L – avail + how-it-works steps"

# ══════════════════════════════════════════════════════════
# 2. OUTSIDE MIDDLE (p1m) – contact card upgrade
# ══════════════════════════════════════════════════════════
# Upgrade the photo
Rep `
'          <img src="https://beyondwoundcare.com/choose.jpg" alt="Doctor with Patient" style="width:100%;height:160px;object-fit:cover;border-radius:6px;display:block;margin-bottom:14px;">' `
'          <img src="https://beyondwoundcare.com/choose.jpg" alt="Doctor with Patient" style="width:100%;height:150px;object-fit:cover;object-position:center top;border-radius:8px;display:block;margin-bottom:12px;box-shadow:0 4px 12px rgba(26,111,163,.2);">' `
"P1M – photo upgrade"

# Upgrade company name
Rep `
'          <h2 style="font-size:13pt;font-weight:900;color:var(--teal-dk);text-align:center;text-transform:uppercase;letter-spacing:.04em;margin-bottom:10px;" contenteditable="true">Beyond Wound Care Inc.</h2>' `
'          <h2 style="font-size:12pt;font-weight:900;color:var(--teal-dk);text-align:center;text-transform:uppercase;letter-spacing:.05em;margin-bottom:8px;" contenteditable="true">Beyond Wound Care Inc.</h2>' `
"P1M – name style"

# Upgrade contact card
Rep `
'        <div class="block" data-block="om-contact">
          <span class="drag-handle">⠿</span>
          <div style="text-align:center;font-size:8.5pt;color:var(--text);line-height:1.8;" contenteditable="true">
            1320 Tower Rd, Suite 136<br>
            Schaumburg, IL 60173<br>
            Phone: 847.873.8693 &nbsp;|&nbsp; Fax: 847.873.8486<br>
            support@beyondwoundcare.com
          </div>
        </div>' `
'        <div class="block" data-block="om-contact">
          <span class="drag-handle">⠿</span>
          <div class="contact-card">
            <div class="cc-name">Beyond Wound Care Inc.</div>
            <div class="cc-line">&#128205; 1320 Tower Rd, Suite 136, Schaumburg, IL 60173</div>
            <div class="cc-line">&#128222; 847.873.8693 &nbsp;&bull;&nbsp; Fax: 847.873.8486</div>
            <div class="cc-line">&#9993; support@beyondwoundcare.com</div>
          </div>
        </div>' `
"P1M – contact card"

# Upgrade counties
Rep `
'          <p style="font-size:8pt;color:var(--text);text-align:center;line-height:1.6;" contenteditable="true"><strong>Counties We Serve:</strong><br>Cook, Dupage, Lake, Will, Mchenry, Kane, Kendall, Boone, Stephenson and Winnebago</p>' `
'          <p class="text-muted" style="text-align:center;line-height:1.65;" contenteditable="true"><strong style="color:var(--teal-dk);">Counties We Serve:</strong><br>Cook &bull; DuPage &bull; Lake &bull; Will &bull; McHenry &bull; Kane<br>Kendall &bull; Boone &bull; Stephenson &bull; Winnebago</p>' `
"P1M – counties"

# Upgrade website & tagline
Rep `
'          <p style="font-size:8pt;color:var(--teal-dk);text-align:center;" contenteditable="true">&#127760; <strong>www.beyondwoundcare.com</strong></p>' `
'          <p style="font-size:8.5pt;color:var(--teal-dk);font-weight:700;text-align:center;letter-spacing:.02em;" contenteditable="true">&#127760; www.beyondwoundcare.com</p>' `
"P1M – web"

Rep `
'          <p style="font-size:7.5pt;color:var(--muted);text-align:center;font-style:italic;" contenteditable="true">Have Access to a Health Professional at Any Time</p>' `
'          <p style="font-size:8pt;color:var(--muted);text-align:center;font-style:italic;line-height:1.5;" contenteditable="true">"Have Access to a Health Professional at Any Time"</p>' `
"P1M – tagline"

# ══════════════════════════════════════════════════════════
# 3. FRONT COVER (p1r) – polish logo, tagline, CTA
# ══════════════════════════════════════════════════════════
# Upgrade tagline box -> tagline-ribbon class
Rep `
'          <div style="background:var(--teal);border-radius:4px;padding:10px 16px;display:inline-block;width:100%;">
            <p style="font-size:10.5pt;font-weight:700;color:var(--white);font-style:italic;" contenteditable="true">"Quality Healing at Home"</p>
          </div>' `
'          <div class="tagline-ribbon">
            <p contenteditable="true">"Quality Healing at Home"</p>
          </div>' `
"P1R – tagline ribbon"

# Upgrade CTA box
Rep `
'          <div style="background:var(--teal-dk);border-radius:5px;padding:10px;">
            <p style="font-size:9pt;font-weight:700;color:var(--white);" contenteditable="true">&#128222; Call Us Now</p>
            <p style="font-size:11pt;font-weight:900;color:var(--accent);" contenteditable="true">847.873.8693</p>
          </div>' `
'          <div class="cta-box">
            <div class="cta-title" contenteditable="true">&#128222; Call Us Now</div>
            <div class="cta-phone" contenteditable="true">847.873.8693</div>
            <div class="cta-sub" contenteditable="true">We serve Illinois — all covered by Medicare</div>
          </div>' `
"P1R – CTA box"

# Upgrade address
Rep `
'          <p style="font-size:8.5pt;color:var(--text);line-height:1.8;" contenteditable="true">1320 Tower Rd, Suite 136<br>Schaumburg, IL 60173<br>Phone: 847.873.8693<br>Fax: 847.873.8486</p>' `
'          <p style="font-size:8pt;color:var(--muted);line-height:1.8;text-align:center;" contenteditable="true">&#128205; 1320 Tower Rd, Suite 136<br>Schaumburg, IL 60173<br>Ph: 847.873.8693 &nbsp;&bull;&nbsp; Fx: 847.873.8486</p>' `
"P1R – address"

# ══════════════════════════════════════════════════════════
# 4. INSIDE LEFT (p2l) – treat-list upgrade
# ══════════════════════════════════════════════════════════
# Heading
Rep `
'          <h2 style="font-size:13pt;font-weight:900;color:var(--white);text-decoration:underline;text-align:center;margin-bottom:14px;letter-spacing:.03em;" contenteditable="true">WHAT WE TREAT</h2>' `
'          <div class="eyebrow" style="text-align:center;">Conditions Treated</div>
          <h2 style="font-size:12pt;font-weight:900;color:var(--white);text-align:center;margin-bottom:12px;letter-spacing:.04em;" contenteditable="true">WHAT WE TREAT</h2>' `
"P2L – heading"

# Replace the dash list with treat-list
Rep `
'          <ul style="list-style:none;padding:0;margin:0 0 14px;">
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Pressure Ulcers</li>
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Arterial Ulcers</li>
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Venous Ulcers</li>
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Diabetic Ulcers</li>
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Infected Wounds</li>
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Post-Surgical Wounds Past 90 Days</li>
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Partial / Full Thickness</li>
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Burns</li>
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Chronic Wounds</li>
            <li style="color:var(--white);font-size:8.5pt;padding:3px 0;" contenteditable="true">– Traumatic Wounds</li>
          </ul>' `
'          <ul class="treat-list" style="margin-bottom:12px;">
            <li contenteditable="true">Pressure Ulcers</li>
            <li contenteditable="true">Arterial Ulcers</li>
            <li contenteditable="true">Venous Ulcers</li>
            <li contenteditable="true">Diabetic Ulcers</li>
            <li contenteditable="true">Infected Wounds</li>
            <li contenteditable="true">Post-Surgical Wounds (90+ days)</li>
            <li contenteditable="true">Partial / Full Thickness Wounds</li>
            <li contenteditable="true">Burns</li>
            <li contenteditable="true">Chronic Wounds</li>
            <li contenteditable="true">Traumatic Wounds</li>
          </ul>' `
"P2L – treat-list"

# Upgrade wound photo
Rep `
'          <img src="https://beyondwoundcare.com/pressure.jpg" alt="Wound Care" style="width:100%;height:110px;object-fit:cover;border-radius:6px;display:block;opacity:.9;">' `
'          <img src="https://beyondwoundcare.com/pressure.jpg" alt="Wound Care" style="width:100%;height:100px;object-fit:cover;object-position:center;border-radius:7px;display:block;box-shadow:0 3px 10px rgba(0,0,0,.3);">' `
"P2L – image"

# ══════════════════════════════════════════════════════════
# 5. INSIDE CENTER (p2m) – mission box + step cards upgrade
# ══════════════════════════════════════════════════════════
# Heading
Rep `
'          <h2 style="font-size:13pt;font-weight:900;color:var(--teal-dk);text-align:center;margin-bottom:14px;letter-spacing:.03em;" contenteditable="true">WHY CHOOSE US</h2>' `
'          <div class="eyebrow" style="text-align:center;">Expert Wound Care</div>
          <h2 style="font-size:12pt;font-weight:900;color:var(--teal-dk);text-align:center;margin-bottom:10px;letter-spacing:.04em;" contenteditable="true">WHY CHOOSE US</h2>' `
"P2M – heading"

# Upgrade image
Rep `
'          <img src="https://beyondwoundcare.com/choose.jpg" alt="Why Choose Us" style="width:100%;height:140px;object-fit:cover;border-radius:6px;display:block;margin-bottom:14px;">' `
'          <img src="https://beyondwoundcare.com/choose.jpg" alt="Why Choose Us" style="width:100%;height:130px;object-fit:cover;object-position:center top;border-radius:8px;display:block;margin-bottom:12px;box-shadow:0 4px 12px rgba(26,111,163,.2);">' `
"P2M – choose image"

# Mission -> mission-box
Rep `
'          <p style="font-size:9pt;color:var(--text);line-height:1.65;text-align:center;" contenteditable="true">Our mission is to provide excellent care at the comfort of your home with our skillful and experienced team. We save you the time to avoid unnecessary travel to the hospital/clinic.</p>' `
'          <div class="mission-box" contenteditable="true">Our mission is to provide excellent care at the comfort of your home with our skilled and experienced team — saving you time and unnecessary trips to the hospital or clinic.</div>' `
"P2M – mission-box"

# ══════════════════════════════════════════════════════════
# 6. INSIDE RIGHT (p2r) – check-list + ins-list + cta-box
# ══════════════════════════════════════════════════════════
# Heading
Rep `
'          <h2 style="font-size:12pt;font-weight:900;color:var(--teal-dk);margin-bottom:12px;letter-spacing:.02em;" contenteditable="true">WHAT WE NEED TO QUALIFY</h2>' `
'          <div class="eyebrow">Requirements</div>
          <h2 style="font-size:11pt;font-weight:900;color:var(--teal-dk);margin-bottom:10px;letter-spacing:.03em;" contenteditable="true">WHAT WE NEED TO QUALIFY</h2>' `
"P2R – heading"

# Replace disc list with check-list
Rep `
'          <ul style="list-style:disc;padding-left:18px;margin:0 0 16px;font-size:8.5pt;color:var(--text);line-height:1.75;">
            <li contenteditable="true">Patient Demographic Information</li>
            <li contenteditable="true">Primary and Secondary Insurance</li>
            <li>Documentation and Photos of Wounds (if available)
              <ul style="list-style:circle;padding-left:16px;margin-top:5px;">
                <li contenteditable="true">Wound Measurements</li>
                <li contenteditable="true">Wound Treatment History</li>
              </ul>
            </li>
          </ul>' `
'          <ul class="check-list" style="margin-bottom:14px;">
            <li contenteditable="true">Patient Demographic Information</li>
            <li contenteditable="true">Primary and Secondary Insurance</li>
            <li>Documentation &amp; Photos of Wounds (if available)
              <ul>
                <li contenteditable="true">Wound Measurements</li>
                <li contenteditable="true">Wound Treatment History</li>
              </ul>
            </li>
          </ul>' `
"P2R – check-list"

# Upgrade qualify image
Rep `
'          <img src="https://beyondwoundcare.com/qualify.jpg" alt="Qualify" style="width:100%;height:90px;object-fit:cover;border-radius:6px;display:block;">' `
'          <img src="https://beyondwoundcare.com/qualify.jpg" alt="Qualify" style="width:100%;height:80px;object-fit:cover;object-position:center;border-radius:7px;display:block;box-shadow:0 3px 10px rgba(26,111,163,.15);">' `
"P2R – qualify image"

# Upgrade ins2-list to ins-list with teal styling (on white bg)
Rep `
'          <ul class="list">
            <li contenteditable="true"><strong>Medicare</strong></li>
            <li contenteditable="true"><strong>United Health Care</strong> &ndash; PPO</li>
            <li contenteditable="true"><strong>Blue Cross Blue Shield</strong></li>
          </ul>' `
'          <ul style="list-style:none;padding:0;margin:0;">
            <li style="display:flex;align-items:center;gap:8px;padding:5px 8px;margin-bottom:4px;background:var(--teal-lt);border-radius:5px;font-size:8.5pt;font-weight:600;color:var(--teal-dk);border-left:3px solid var(--teal);" contenteditable="true">Medicare</li>
            <li style="display:flex;align-items:center;gap:8px;padding:5px 8px;margin-bottom:4px;background:var(--teal-lt);border-radius:5px;font-size:8.5pt;font-weight:600;color:var(--teal-dk);border-left:3px solid var(--teal);" contenteditable="true">United Health Care &ndash; PPO</li>
            <li style="display:flex;align-items:center;gap:8px;padding:5px 8px;margin-bottom:4px;background:var(--teal-lt);border-radius:5px;font-size:8.5pt;font-weight:600;color:var(--teal-dk);border-left:3px solid var(--teal);" contenteditable="true">Blue Cross Blue Shield</li>
          </ul>' `
"P2R – ins2-list pills"

# Upgrade CTA box
Rep `
'        <div class="block mt-md" data-block="qualify-cta" style="background:linear-gradient(135deg,var(--teal) 0%,var(--teal-dk) 100%);border-radius:6px;padding:12px;text-align:center;">
          <span class="drag-handle">⠿</span>
          <p style="font-size:8.5pt;font-weight:700;color:var(--white);" contenteditable="true">Ready to Start Your Healing Journey?</p>
          <p style="font-size:7.5pt;color:rgba(255,255,255,.8);margin:4px 0 8px;" contenteditable="true">Contact us to schedule your in-home assessment.</p>
          <p style="font-size:10pt;font-weight:900;color:var(--accent);" contenteditable="true">&#128222; 847.873.8693</p>
        </div>' `
'        <div class="block mt-md" data-block="qualify-cta">
          <span class="drag-handle">⠿</span>
          <div class="cta-box">
            <div class="cta-title" contenteditable="true">Ready to Start Your Healing Journey?</div>
            <div class="cta-sub" contenteditable="true">Contact us to schedule your in-home assessment.</div>
            <div class="cta-phone" contenteditable="true">&#128222; 847.873.8693</div>
          </div>
        </div>' `
"P2R – CTA box"

# ══════════════════════════════════════════════════════════
# WRITE RESULT
# ══════════════════════════════════════════════════════════
[System.IO.File]::WriteAllText($f, $c, [System.Text.Encoding]::UTF8)
Write-Host "`nDone. File length: $($c.Length)"
