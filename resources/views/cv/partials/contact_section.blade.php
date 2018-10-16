
          <section class="section contact_section even" id="contact">
            <div class="section_header contact_section_header">
              <h2 class="section_title contact_section_title">
                <a href="#">
                  <span class="icon icon-envelope-alt"></span>
                  <span class="section_name">Contacts</span>
                </a>
                <span class="section_icon"></span>
              </h2>
            </div>
            <div class="section_body contact_section_body">
              <div id="googlemap_data">
                
                <div id="sc_googlemap" style="width:100%;height:294px;" class="sc_googlemap"></div>
                
                <div class="add_info">
                  <div class="profile_row header "> Contact info </div>
                  <div class="profile_row address"> <span class="th">Address</span><span class="td"></span> </div>
                  <div class="profile_row phone"> <span class="th">Phone</span><span class="td"></span> </div>
                  <div class="profile_row email"> <span class="th">Email</span><span class="td"></span> </div>
                  <div class="profile_row website"> <span class="th">Website</span><span class="td"></span> </div>
                </div>
              </div>
              <div class="sidebar contact_sidebar">
                <aside class="widget widget_qrcode_vcard" id="qrcode-vcard-widget-2">
                  <div class="widget_inner">
                    <img src="/public/cv/myimages/qr.png">
                  </div>
                </aside>
              </div>
              <div class="contact_form">
                <div class="contact_form_data">
                  <div class="sc_contact_form">
                    <h3 class="title">Let's keep in touch</h3>
                    
                    <form action="{{ action('CvController@postMessages')  }}" method="POST">
                    {{ csrf_field() }}
                      <div class="field">
                        <label class="required" for="sc_contact_form_username">Name</label>
                        <input type="text" name="name" id="sc_contact_form_username" required />
                      </div>
                      <div class="field">
                        <label class="required" for="sc_contact_form_email">Email</label>
                        <input type="text" name="email" id="sc_contact_form_email" required/>
                      </div>
                      <div class="field message">
                        <label class="required" for="sc_contact_form_message">Your Message</label>
                        <textarea name="body" id="sc_contact_form_message" required></textarea>
                      </div>
                      <button class="button" type="submit"> Submit</button>
                    </form>
                    <div class="result sc_infobox"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .section_body --> 
          </section>