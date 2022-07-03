import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faAngleRight } from '@fortawesome/free-solid-svg-icons'
import { faSlidersH } from '@fortawesome/free-solid-svg-icons'

import Header from './components/header'
import House from './components/house'

const Home = () => {
  return (
    <>
      <Header />
      <main>
        <div className='container'>

          <div className='categories'>

            <div className='categories_wrapper'>

            <House addClass="active" img_src="./components./test" name="Islands" />
            <House img_src="./components./test" name="Beach" />
            <House img_src="./components./test" name="Amazing pools" />
            <House img_src="./components./test" name="OMG!" />

            </div>
            <div className='houses_options'>

              <div className='next_categories'>
                <div className='arrow_wrapper'>
                <FontAwesomeIcon icon={faAngleRight} />
                </div>
              </div>

              <div className='houses_filters'>
                <FontAwesomeIcon icon={faSlidersH} />
                <span>Filters</span>
              </div>

            </div>

          </div>

          <div className='stays'>
            <div className='stay'>

              <div className='stay_img'>
                <img src="/src/assets/fa2ed873-e726-4e6d-ab1a-28bc7c69d805.webp" />
              </div>

            </div>
          </div>

        </div>
      </main>
    </>
  )
}

export default Home