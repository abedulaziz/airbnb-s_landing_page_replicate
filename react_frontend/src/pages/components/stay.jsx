import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faStar } from '@fortawesome/free-solid-svg-icons'

const Stay = ({src, stay_location, rating, distance, cost}) => {
  return (
    <div className='stay'>

      <div className='stay_img'>
        <div className="img_wrapper">
          <img src="jd" />

        </div>
      </div>

      <div className='info'>

        <div className='location_and_rating'>
          <div className='stay_location'>{stay_location}</div>
          <div className='stay_rating'><span>{rating}</span><FontAwesomeIcon icon={faStar} /></div>
        </div>

        <div className='distance'><p>{distance} kilometers away</p></div>
        <div className='num_of_days'></div>
        <div className='cost_per_night'>
          <p><span className='cost_in_dollars'>${cost}</span> night</p>
          <span className='total'></span>
        </div>
      </div>

    </div>
  )
}

export default Stay