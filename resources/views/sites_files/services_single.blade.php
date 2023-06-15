@extends('sites_files.footers')
@section('content')
 <!--loader-->
 <div class="loader_all" id="loader_all">
        <div class="l_any">
            <img src="/img/lder/l3.gif" alt="">
        </div>
    </div>
    <!--chat-->
    <div class="online_chat">
        <a href="#mtexto" id="mchato"><i class="fas fa-comment-alt"></i></a>
    </div>
    <div class="o-chatdisplay">
        <div class="hd-chat" id="mtexto">
            <a href="#mchato" class="chat-cancel">
                <i class="fas fa-times"></i>
            </a>
            <h1>ONLINE CHAT</h1>
        </div>
        <div class="m-chat">

        </div>
    </div>
     <!--book service-->
     <div class="bookform">
        <div class="bookfin kuanileft">
            <div class="b-out">
                <i class="fas fa-times"></i>
            </div>
            <div class="b-hd">
                <h1>Book Service</h1>
            </div>
            <div class="b-body">
                <div class="b-ser">Service: <input type="text"></div>
                <div class="b-com">Company: <input type="text"></div>
                <div class="b-dat">Date / time: <input type="datetime-local"></div>
                <div>Description of Task <br>
                    <textarea name="dtask" id="dtask" cols="30" rows="8"></textarea>
                </div>
                <div>Contact <br>
                    <div class="b-tel">Tel: <input type="text"></div>
                    <div class="b-ema">Email: <input type="email"></div>
                </div>
                <div>Means of Payment:<br>
                    <div><input type="radio" id="M-PESA" name="malipo" value="M-PESA">
                        <label for="M-PESA">M-PESA</label><br>
                        <input type="radio" id="CO-OPERATIVE" name="malipo" value="CO-OPERATIVE">
                        <label for="CO-OPERATIVE">CO-OPERATIVE BANK</label><br>
                        <input type="radio" id="EQUITY" name="malipo" value="EQUITY">
                        <label for="EQUITY">EQUITY BANK</label>
                    </div>
                </div>
                <button>Submit</button>
            </div>
        </div>
    </div>
<!--home wehere it happens section-->   
 <section class="p-14">

  <!--service section-->

  <section class="service-form">
  
            <section class="intro-Audit">
                <p>/ Service -<span>/ Finance Management</span></p>
                <a href="/service" class="bckbtn1" style="text-decoration: none;"><span class="dr2"><i class="fas fa-door-open"></i></span><span
                        class="dr1"><i class="fas fa-door-closed"></i></span> Back to Service</a>
            </section>
            <section class="Audit-detail-body">
                <div class="first-Audit">
                    <div class="fa-left">
                        <h2>Finance Management</h2>
                        <p>Through robust Financial Management tools, resources and procedures, we deliver high quality Financial Management services, adhering to the highest standards of independence, ethics, professional objectivity while applying technical excellence. Our services can strengthen your business and stakeholders’ confidence. You’ll receive professionally verified results and insights that help you grow.
                        <h1>We help you with:</h1>
                        
                        <li>Calculating the amount of capital required by the Organization.</li>
                        <li>Financial control on Long / Short term.</li>
                        <li>Allocation of profits for e.g (Expansion / Innovation purposes).</li>
                        <li>Formation of capital structure (This involves debt equity analysis).</li>
                        <li>Investing the capital to gain more regular returns.</li>
                        <li>Effective management of money for payment of salaries and bills, maintaining stock, meeting liabilities, and the purchase of any materials or equipment.</li>
                        
                        </p>
                    </div>
                    <div class="fa-right">
                        <img src="/img/serviceimg/a1.jpeg" alt="" height="500" width="100%">
                    </div>
                </div>
                <div class="bookservice"> <button class="bsbtn">BOOK SERVICE</button></div>

            </section>
        

    </section>     
</section>
<section class="p-14">

  <!--service section-->

  <section class="service-form">
  
       <section class="intro-Outsourcing">
              <p>/ Service -<span>/ Finance Literacy & Institution Linkages</span></p>
                <a href="/service" class="bckbtn4" style="text-decoration: none;"><span class="dr2"><i class="fas fa-door-open"></i></span><span
                        class="dr1"><i class="fas fa-door-closed"></i></span> Back to Service</a>
            </section>
            <section class="Outsourcing-detail-body">
                <div class="first-Outsourcing">
                    <div class="fo-left">
                        <h2>Finance Literacy & Institution Linkages</h2>
                        <p>We offer outsourcing services that deal with all of your routine accounting and compliance functions that otherwise take up far too much of your time, leaving you free to focus on your core business activities. You’ll work with qualified specialists committed to delivering an accurate, prompt and valued service. We will become an extended division of your operations, and we will tailor our service accordingly in the following areas:</p>
                    </div>
                    <div class="fo-center">
                    
                        <li>
                            <i class="fas fa-long-arrow-right"></i>
                            <div>
                                <h1>Cloud Accounting Services</h1>
                                <p>This involves preparation and maintenance of daily accounts of the company through Xero Cloud Accounting</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-long-arrow-right"></i>
                            <div>
                                <h1>Financial Statements</h1>
                                <p>Annual accounts are prepared for statutory annual audit</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-long-arrow-right"></i>
                            <div>
                                <h1>Accounts Payable/Receivable</h1>
                                <p>Providing assistance in making payments to creditors and receiving payments from debtors while leaving ultimate control with the management</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-long-arrow-right"></i>
                            <div>
                                <h1>Expense Processing</h1>
                                <p>Analyzing the expenses incurred by the firm on a monthly/quarterly/annually basis and preparing a cumulative report</p>
                            </div>
                        </li>
                       
                    
                    </div>
                    <div class="fo-right">
                
                        <li>
                            <i class="fas fa-long-arrow-right"></i>
                            <div>
                                <h1>Inventory verification and valuation</h1>
                                <p>Making a note of the inventory and evaluating it from time to time</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-long-arrow-right"></i>
                            <div>
                                <h1>E-accounting services</h1>
                                <p>Converting all the hefty paperwork into online accounting invoices for easy access anytime anywhere.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-long-arrow-right"></i>
                            <div>
                                <h1>Cash Forecasting Services</h1>
                                <p>Analyzing the cash requirements of the business and forecasting future cash requirements</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-long-arrow-right"></i>
                            <div>
                                <h1>Consolidation of accounts</h1>
                                <p>Consolidating accounts so that they are easy for the management to study</p>
                            </div>
                        </li>
                       
               
                    </div>
                </div>
                <div class="bookservice"> <button class="bsbtn">BOOK SERVICE</button></div>
            </section>


    </section>     
</section>
@endsection