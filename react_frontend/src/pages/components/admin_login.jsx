import React from 'react'
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faXmark } from "@fortawesome/free-solid-svg-icons";

const AdminLogin = ({exit}) => {
  return (
    <div className='login'>
      <div className='login_heading'>
        <div className='exit'><FontAwesomeIcon onClick={exit} icon={faXmark} /></div>
        <div className='login_text'>Log in as admin</div>
      </div>

      <form id='login'>

        <div className='form_heading'>
          <h2>Welcome to Airbnb</h2>
        </div>

        <div className='inputs'>
          <input type="email" name='email' placeholder='Email' />
          <input type="password" name='password' placeholder='Password' />
        </div>

        <button id='submit'>Continue</button>

      </form>
    </div>
  )
}

export default AdminLogin