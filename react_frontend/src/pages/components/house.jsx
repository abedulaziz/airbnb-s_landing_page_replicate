import React from 'react'

const House = ({addClass, img_src, name}) => {
  return (
    <button tabIndex="1" className={"house " + addClass}>

      <div className='house_icon'><img src={img_src} /></div>
      <div className='house_name'><span>{name}</span></div>

    </button>
  )
}

export default House