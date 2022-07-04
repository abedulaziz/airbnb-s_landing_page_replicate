import React from 'react'

const Admin = () => {
  return (
    <div className='admin_forms'>
      <div className='container'>
        <div className='forms'>
          
          <div className='add_category'>
            <form>

              <div className='heading'>
                <h2>Add Category</h2>
              </div>

              <input type="text" name='name' placeholder='Name' />
              <input type="text" name='image_URL' placeholder='Image URL' />
              <div className='submission'>
                <button id="submitCategory">Submit Category</button>
              </div>
            </form>
          </div>
          <div className='add_stay'>
            <form>

              <div className='heading'>
                <h2>Add Stay</h2>
              </div>

              <input type="text" name='location' placeholder='Location' />
              <input type="number" name='category_id' placeholder='Category ID' />
              <input type="number" name='distance' placeholder='distance' />
              <input type="number" name='cost_per_night' placeholder='Cost per night' />
              <select type="number" name='cost_per_night' placeholder='Cost per night'>
                <option value="flexible">Flexible</option>
                <option value="middle_east">Middle Eact</option>
                <option value="united_states">United States</option>
                <option value="france">France</option>
                <option value="italy">Italy</option>
              </select>

              <div className='submission'>
                <button id="submitStay">Submit Stay</button>
              </div>


            </form>
          </div>

        </div>

      </div>
    </div>
  )
}

export default Admin