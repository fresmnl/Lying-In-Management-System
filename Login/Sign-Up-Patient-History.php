<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="css/Sign-Up-Patient-History.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
    <title>Create an Account - History</title>
    <style>.rectangle-parent1{display:flex;align-items:center;background-color:transparent;position:relative;}.frame-input{border:1px solid #ccc;background-color:transparent;padding:5px;flex:1;font-size:16px;outline:none;}.frame-icon{cursor:pointer;margin-left:10px;}.calendar-popup{display: none; position: absolute;top: 3.4rem;left: 0;background: white;border: 2px solid var(--color-deepskyblue);padding: 10px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);z-index: 1000;width: 326px;    }.calendar-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;}.calendar-header select{padding:5px;}.calendar-days{display:grid;grid-template-columns:repeat(7,1fr);gap:5px;}.calendar-day,.calendar-day-name{text-align:center;padding:5px;border:1px solid #ddd;cursor:pointer;}.calendar-day-name{font-weight:bold;}.calendar-day.selected{background-color:#007bff;color:white;}</style>
  </head>
  <body>
    <div class="sign-up-patient-history">
      <main class="rectangle-parent">
        <div class="frame-child"></div>
        <header class="rectangle-group">
          <div class="frame-item"></div>
          <div class="logo-white-1-wrapper">
            <img
              class="logo-white-1"
              loading="lazy"
              alt=""
              src="images/signup-logo.svg"
            />
          </div>
          <div class="frame-wrapper">
            <div class="frame-parent">
              <div class="create-an-account-wrapper">
                <a class="create-an-account">Create an Account</a>
              </div>
              <div class="provide-the-required">
                Provide the required information to get started.
              </div>
            </div>
          </div>
          <div class="frame-container">
            <div class="frame-group">
              <div class="already-have-an-account-wrapper">
                <div class="already-have-an">Already have an account?</div>
              </div>
              <button class="rectangle-container">
                <div class="frame-inner"></div>
                <a class="sign-in" href="Login.php">Sign in</a>
              </button>
            </div>
          </div>
        </header>
        <section class="frame-section">
          <div class="frame-div">
            <div class="frame-parent1">
              <div class="frame-wrapper1">
                <div class="frame-parent2">
                  <div class="ellipse-parent">
                    <div class="ellipse-div"></div>
                    <a class="a">1</a>
                  </div>
                  <div class="line-wrapper">
                    <div class="line-div"></div>
                  </div>
                  <div class="ellipse-group">
                    <div class="frame-child1"></div>
                    <a class="a1">2</a>
                  </div>
                  <div class="line-container">
                    <div class="frame-child2"></div>
                  </div>
                  <div class="ellipse-container">
                    <div class="frame-child3"></div>
                    <a class="a2">3</a>
                  </div>
                </div>
              </div>
              <div class="frame-parent3">
                <div class="frame-parent4">
                  <div class="frame-parent5">
                    <div class="personal-details-header-wrapper">
                      <div class="personal-details-header">
                        <div class="personal-details">Personal Details</div>
                        <div class="history">History</div>
                      </div>
                    </div>
                    <div class="frame-parent6">
                      <div class="if-a-particular-field-does-not-wrapper">
                        <div class="if-a-particular-container">
                          <span class="if-a-particular"
                            >If a particular field does not apply to you, kindly
                            enter</span
                          >
                          <b> "N/A"</b>
                          <span class="not-applicable-in">
                            (Not Applicable) in that field.</span
                          >
                        </div>
                      </div>
                      <form class="frame-form" style="  height: 23.3rem;">
                        <div class="rectangle-div"></div>
                        <div class="frame-parent7">
                          <div class="past-surgical-history-wrapper">
                            <div class="past-surgical-history">
                              Past Surgical History
                            </div>
                          </div>
                          <div class="frame-parent8">
                            <div class="operation-date-header-wrapper">
                              <div class="operation-date-header">
                                <b class="major-minor"
                                  >Major / Minor Operation</b
                                >
                                <b class="date">Date</b>
                              </div>
                            </div>
                            <div class="frame-parent9">
                              <div class="frame-button" style="padding: 0.55rem;">
                                <div class="frame-child4"></div>
                                <input 
                                  class="enter-the-name"
                                  style="border: none; background-color:transparent;"
                                  placeholder= "Enter the name or type of operation"
                                  type="text"
                                />
                              </div>
                              <div class="rectangle-parent1">
                                <div class="frame-child5"></div>
                                <input
                                    class="frame-input"
                                    id="dateInput"
                                    placeholder="mm/dd/yyyy"
                                    type="text"
                                />
                                <img
                                    class="frame-icon"
                                    alt="Calendar"
                                    src="images/calendar.svg"
                                    id="calendarIcon"
                                />
                                <div class="calendar-popup" id="calendarPopup">
                                    <div class="calendar-header">
                                        <select id="monthSelect"></select>
                                        <select id="yearSelect"></select>
                                    </div>
                                    <div class="calendar-days" id="calendarDays">
                                        <!-- Days of the week will be inserted here -->
                                    </div>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                  
                      </form>
                    </div>
                  </div>
                  <div class="frame-parent12">
                    <div class="registration-wrapper">
                      <div class="registration">Registration</div>
                    </div>
                    <div class="rectangle-parent4">
                      <div class="frame-child9"></div>
                      <div class="frame-parent13">
                        <div class="personal-and-social-history-wrapper">
                          <div class="personal-and-social">
                            Personal and Social History
                          </div>
                        </div>
                        <div class="frame-parent14">
                          <div class="packyears-wrapper">
                            <b class="packyears">Pack/Years</b>
                          </div>
                          <div class="frame-parent15">
                            <div class="frame-wrapper2">
                              <div class="frame-parent16">
                                <div class="frame-wrapper3">
                                  <div class="smoker-checkboxes-parent">
                                    <input
                                      class="smoker-checkboxes"
                                      type="checkbox"
                                    />

                                    <input
                                      class="smoker-checkboxes1"
                                      type="checkbox"
                                    />
                                  </div>
                                </div>
                                <div class="frame-parent17">
                                  <div class="smoker-parent">
                                    <div class="smoker">Smoker</div>
                                    <div class="smoker1">Smoker</div>
                                  </div>
                                  <div class="alcoholic-beverage-drinker">
                                    Alcoholic Beverage Drinker
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="gallery-images-parent">
                                <input 
                                  class="gallery-images"
                                  type="text" 
                                  name="" 
                                  id=""
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;">
                              <div class="frame-parent18">
                                <div class="bottlesday-wrapper">
                                  <b class="bottlesday">Bottles/Day</b>
                                </div>
                                <input 
                                  class="gallery-images"
                                  type="text" 
                                  name="" 
                                  id=""
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;">
                                                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="frame-parent19">
                        <input class="frame-input1" type="checkbox" />

                        <div class="drugs-use">Drugs Use / Abuse</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rectangle-parent5">
                  <div class="frame-child10"></div>
                  <div class="frame-parent20">
                    <div class="family-history-wrapper">
                      <div class="family-history">Family History</div>
                    </div>
                    <div class="frame-parent21">
                      <div class="frame-parent22">
                        <input class="frame-input2" type="checkbox" />

                        <div class="hypertension">Hypertension</div>
                      </div>
                      <div class="frame-parent23">
                        <input class="frame-input3" type="checkbox" />

                        <div class="asthma">Asthma</div>
                      </div>
                      <div class="frame-parent24">
                        <input class="frame-input4" type="checkbox" />

                        <div class="blood-disorder">Blood Disorder</div>
                      </div>
                    </div>
                  </div>
                  <div class="frame-parent25">
                    <div class="family-history-second-row-chec-parent">
                      <input
                        class="family-history-second-row-chec"
                        type="checkbox"
                      />

                      <div class="heart-disorder">Heart Disorder</div>
                    </div>
                    <div class="frame-parent26">
                      <input class="frame-input5" type="checkbox" />

                      <div class="liver-disorder">Liver Disorder</div>
                    </div>
                    <div class="frame-parent27">
                      <input class="frame-input6" type="checkbox" />

                      <div class="kidney-disorder">Kidney Disorder</div>
                    </div>
                  </div>
                  <div class="frame-parent28">
                    <div class="tuberculosis-checkboxes-wrapper">
                      <div class="tuberculosis-checkboxes">
                        <input class="tuberculosis-checkbox" type="checkbox" />

                        <input class="tuberculosis-checkbox1" type="checkbox" />

                        <input class="tuberculosis-checkbox2" type="checkbox" />
                      </div>
                    </div>
                    <div class="skin-disease-options-parent">
                      <div class="skin-disease-options">
                        <div class="skin-disease-type">
                          <div class="pulmonary-tuberculosis">
                            Pulmonary Tuberculosis
                          </div>
                          <div class="skin-disease-input">
                            <div class="skin-disease-types">
                              <div class="skin-disease">Skin Disease</div>
                              <div class="skin-disease1">Skin Disease</div>
                            </div>
                            <div class="skin-disease-type-input">
                              <div class="type-input">
                                <div class="specific-type">
                                  <b class="type">Type:</b>
                                  <b class="type1">Type:</b>
                                </div>
                              </div>
                              <div class="specific-type-checkboxes" style="border:none; background:none;">
                                <div
                                  class="specific-type-checkboxes-child"
                                ></div>
                                <input 
                                  class="gallery-images"
                                  type="text" 
                                  name="" 
                                  id=""
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width: 8rem;">                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="diabetes-options-parent">
                          <div class="diabetes-options">
                            <div class="diabetes-checkboxes">
                              <input
                                class="diabetes-checkbox"
                                type="checkbox"
                              />

                              <input
                                class="diabetes-checkbox1"
                                type="checkbox"
                              />
                            </div>
                          </div>
                          <div class="medical-conditions">
                            <div class="conditions">
                              <div class="diabetes-mellitus">
                                Diabetes Mellitus
                              </div>
                              <div class="allergy-details">
                                <div class="allergy-type">
                                  <b class="type2">Type:</b>
                                </div>
                                <input 
                                  class="gallery-images"
                                  type="text" 
                                  name="" 
                                  id=""
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width: 8rem;">                
                              </div>
                            </div>
                            <div class="conditions1">
                              <div class="allergy-parent">
                                <div class="allergy">Allergy</div>
                                <div class="allergy1">Allergy</div>
                              </div>
                              <div class="frame-parent29">
                                <div class="frame-wrapper4">
                                  <div class="type-parent">
                                    <b class="type3">Type:</b>
                                    <b class="type4">Type:</b>
                                  </div>
                                </div>
                                <div class="rectangle-parent6" style="border:none; background:none">
                                  <div class="frame-child11"></div>
                                  <input 
                                  class="gallery-images"
                                  type="text" 
                                  name="" 
                                  id=""
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width: 8rem;">                
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="cancer-options-parent">
                          <input class="cancer-options" type="checkbox" />

                          <div class="cancer-details">
                            <div class="cancer-type">
                              <div class="cancer">Cancer</div>
                              <div class="cancer-type-input">
                                <div class="cancer-type-box">
                                  <div class="cancer-specific-type">
                                    <b class="type5">Type:</b>
                                  </div>
                                  <input 
                                  class="gallery-images"
                                  type="text" 
                                  name="" 
                                  id=""
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width:8rem;">
                                </div>
                              </div>
                            </div>
                            <div class="cancer-stage">
                              <div class="cancer-stage-input">
                                <div class="cancer-stage-box">
                                  <b class="stage">Stage:</b>
                                </div>
                                <input 
                                  class="gallery-images"
                                  type="text" 
                                  name="" 
                                  id=""
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width:8rem;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="others-input-parent">
                        <input
                          class="others-input"
                          placeholder="Others:"
                          type="text"
                        />

                        <input 
                                  class="gallery-images"
                                  type="text" 
                                  name="" 
                                  id=""
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width:64rem;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <footer class="pagination">
              <div class="page-controls">
                  <form action="Sign-Up-Patient-Personal.php">
                      <input type="submit" value="Previous" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                  </form>
                <div class="next-button">
                  <form action=" ">
                      <input type="submit" value="Clear" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                  </form>
                  <form action="Sign-Up-Patient-Registration.php">
                      <input type="submit" value="Next" class="next-button" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #FDFDFD; border: none;">
                  </form>
                </div>
              </div>
            </footer>
          </div>
        </section>
      </main>
    </div>
  </body>
</html> 
<script src="javascript/calendar-history.js"></script>