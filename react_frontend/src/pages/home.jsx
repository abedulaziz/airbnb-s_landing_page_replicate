import React, {useState, useEffect} from "react";
import Stay from "./components/stay";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faAngleRight } from "@fortawesome/free-solid-svg-icons";
import { faSliders } from "@fortawesome/free-solid-svg-icons";

import Header from "./components/header";
import House from "./components/house";

const Home = () => {
  
  const [categs, setCategs] = useState(null)
  const [stays, setStays] = useState(null)

  
  useEffect(() => {

    const getCategoriesAndSpecifiedStays = async () => {
      
      const getData = await fetch("http://127.0.0.1:8000/api/get_categories/8")
      const formatedData = await getData.json();

      console.log(formatedData)

      setCategs(formatedData.categories)
      setStays(formatedData.specified_stays)
    } 
    
    getCategoriesAndSpecifiedStays()
    
  }, [])



  return (
    <>
      <Header />
      <main>
        <div className="container">
          <div className="categories">
            <div className="categories_wrapper">

              {categs && categs.map(categ => 
                <House key={categ.id} img_src={categ.image_URL} name={categ.name} />
              )}
              
            </div>
            <div className="houses_options">
              <div className="next_categories">
                <div className="arrow_wrapper">
                  <FontAwesomeIcon icon={faAngleRight} />
                </div>
              </div>

              <div className="houses_filters">
                <FontAwesomeIcon icon={faSliders} />
                <span>Filters</span>
              </div>
            </div>
          </div>

          <div className="stays">
            <div className="stays_wrapper">

              {stays ? stays.map(stay => 
                <Stay 
                  key={stay.id}
                  stay_location={stay.location} 
                  rating={stay.rate} 
                  distance={stay.distance}
                  cost={stay.cost_per_night}
                  gallery={stay.gallery}
                />
              ) : "No stays found"}

            </div>
          </div>
        </div>
      </main>
    </>
  );
};

export default Home;
