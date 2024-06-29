 <style>
 .ag-format-container {
  width: 1142px;
  margin: 0 auto;
}


body {
  background-color: #000;
}
.ag-courses_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;

  padding: 50px 0;
}
.ag-courses_item {
  -ms-flex-preferred-size: calc(33.33333% - 30px);
  flex-basis: calc(33.33333% - 30px);

  margin: 0 15px 30px;

  overflow: hidden;

  border-radius: 28px;
}
.ag-courses-item_link {
  display: block;
  padding: 30px 20px;
  background-color: #121212;

  overflow: hidden;

  position: relative;
}
.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
  text-decoration: none;
  color: #FFF;
}
.ag-courses-item_link:hover .ag-courses-item_bg {
  -webkit-transform: scale(10);
  -ms-transform: scale(10);
  transform: scale(10);
}
.ag-courses-item_title {
  min-height: 87px;
  margin: 0 0 25px;

  overflow: hidden;

  font-weight: bold;
  font-size: 30px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date-box {
  font-size: 18px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date {
  font-weight: bold;
  color: #f9b234;

  -webkit-transition: color .5s ease;
  -o-transition: color .5s ease;
  transition: color .5s ease
}
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: #f9b234;

  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;

  border-radius: 50%;

  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}
.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}



@media only screen and (max-width: 979px) {
  .ag-courses_item {
    -ms-flex-preferred-size: calc(50% - 30px);
    flex-basis: calc(50% - 30px);
  }
  .ag-courses-item_title {
    font-size: 24px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}
@media only screen and (max-width: 639px) {
  .ag-courses_item {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .ag-courses-item_title {
    min-height: 72px;
    line-height: 1;

    font-size: 24px;
  }
  .ag-courses-item_link {
    padding: 22px 40px;
  }
  .ag-courses-item_date-box {
    font-size: 16px;
  }
}
 </style>
	<section id="content">
	
	<!-- <div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
                                <div class="container"> -->
                                <div class="ag-format-container">
  <div class="ag-courses_box">
    <div class="ag-courses_item">
      <a href="https://www.cs.uct.ac.za/mit_notes/web_programming.html" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          UI/Web DEVELOPMENT
        </div>

        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            Learning
          </span>
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="https://mrcet.com/downloads/digital_notes/IT/MOBILE%20APPLICATION%20DEVELOPMENT%20DIGITAL%20NOTES(R18A1207).pdf" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
           Mobile Application Design
        </div>

        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            Start Learning
          </span>
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="https://www.iipa.org.in/upload/IPG_const.pdf" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        Indian Polity
        </div>
       <span class="ag-courses-item_date">UPSC & MPSC</span> 

        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            Learning
          </span>
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="https://www.cs.uct.ac.za/mit_notes/python/Object-OrientedProgramminginPython.pdf" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Python
        </div>

        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            Learning
          </span>
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="https://www.youtube.com/watch?v=33pQNV0h22E" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Current Affair
        </div>
        <span class="ag-courses-item_date">UPSC & MPSC</span> 

        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            Learning
          </span>
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="https://st.adda247.com/https://www.bankersadda.com/wp-content/uploads/multisite/2022/09/30133000/200-Questions-PDF-for-IBPS-PO-Prelims-2022-Reasoning-Ability.pdf" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          IBPS Reasoning Q&A
        </div>
        
      </a>
    </div>

    <!-- <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg">
        </div>
        <div class="ag-courses-item_title">
          Digital Marketing
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Interior Design
        </div>

        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            31.10.2024
          </span>
        </div>
      </a>
    </div> -->

  </div>
</div>
	</section>
 