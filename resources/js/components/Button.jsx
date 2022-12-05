import React from 'react'
import PropTypes from 'prop-types'

const Button = () => {
  return <button className="btn btn-primary" onClick={() => App()}>Get Random Article</button>
  
}
Button.propTypes = { 
  text: PropTypes.string,
  color: PropTypes.string,
  onClick: PropTypes.func
}

export default Button