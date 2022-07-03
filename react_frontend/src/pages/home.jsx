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

            <House addClass="active" img_src="https://a0.muscache.com/pictures/8e507f16-4943-4be9-b707-59bd38d56309.jpg" name="Islands" />
            <House img_src="https://a0.muscache.com/pictures/10ce1091-c854-40f3-a2fb-defc2995bcaf.jpg" name="Beach" />
            <House img_src="https://a0.muscache.com/pictures/3fb523a0-b622-4368-8142-b5e03df7549b.jpg" name="Amazing pools" />
            <House img_src="https://a0.muscache.com/pictures/c5a4f6fc-c92c-4ae8-87dd-57f1ff1b89a6.jpg" name="OMG!" />

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
            <div className='stays_wrapper'>
              <div className='stay'>

                <div className='stay_img'>
                  <img src="https://a0.muscache.com/im/pictures/fa2ed873-e726-4e6d-ab1a-28bc7c69d805.jpg?im_w=720" />
                </div>

              </div>
              <div className='stay'>

                <div className='stay_img'>
                  <img src="https://a0.muscache.com/im/pictures/fa2ed873-e726-4e6d-ab1a-28bc7c69d805.jpg?im_w=720" />
                </div>

              </div>
              <div className='stay'>

                <div className='stay_img'>
                  <img src="https://a0.muscache.com/im/pictures/fa2ed873-e726-4e6d-ab1a-28bc7c69d805.jpg?im_w=720" />
                </div>

              </div>
              <div className='stay'>

                <div className='stay_img'>
                  <img src="https://a0.muscache.com/im/pictures/fa2ed873-e726-4e6d-ab1a-28bc7c69d805.jpg?im_w=720" />
                </div>

              </div>

            </div>
          </div>

        </div>
      </main>
    </>
  )
}

export default Home